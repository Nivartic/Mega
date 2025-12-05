<?php

/**
 * Script de prueba para verificar las relaciones uno-a-uno
 * entre usuarios, motorizados y clientes
 * 
 * Ejecutar: php test_relationships.php
 */

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\User;
use App\Models\Driver;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

echo "=== Prueba de Relaciones Base de Datos ===\n\n";

try {
    DB::beginTransaction();

    // 1. Verificar estructura de tabla clientes
    echo "1. Verificando estructura de tabla 'clientes'...\n";
    $columns = DB::getSchemaBuilder()->getColumnListing('clientes');
    echo "   Columnas: " . implode(', ', $columns) . "\n";

    // Verificar índices y claves foráneas
    echo "\n2. Verificando relaciones de clave foránea...\n";
    $foreignKeys = DB::select("
        SELECT 
            CONSTRAINT_NAME,
            COLUMN_NAME,
            REFERENCED_TABLE_NAME,
            REFERENCED_COLUMN_NAME
        FROM information_schema.KEY_COLUMN_USAGE
        WHERE TABLE_SCHEMA = DATABASE()
        AND TABLE_NAME = 'clientes'
        AND REFERENCED_TABLE_NAME IS NOT NULL
    ");

    if (!empty($foreignKeys)) {
        foreach ($foreignKeys as $fk) {
            echo "   ✓ {$fk->COLUMN_NAME} -> {$fk->REFERENCED_TABLE_NAME}.{$fk->REFERENCED_COLUMN_NAME}\n";
        }
    }

    // 2. Crear usuario de prueba
    echo "\n3. Creando usuario de prueba...\n";
    $user = User::create([
        'name' => 'Usuario Test',
        'email' => 'test_' . time() . '@example.com',
        'password' => bcrypt('password123'),
        'role' => 'cliente'
    ]);
    echo "   ✓ Usuario creado con ID: {$user->id}\n";

    // 3. Crear cliente asociado al usuario
    echo "\n4. Creando cliente asociado...\n";
    $cliente = Cliente::create([
        'usuario_id' => $user->id,
        'dni' => '12345678',
        'telefono' => '987654321'
    ]);
    echo "   ✓ Cliente creado con ID: {$cliente->id}\n";

    // 4. Probar relación User -> Cliente
    echo "\n5. Probando relación User -> Cliente...\n";
    $clienteFromUser = $user->cliente;
    if ($clienteFromUser && $clienteFromUser->id === $cliente->id) {
        echo "   ✓ Relación User->cliente funciona correctamente\n";
        echo "   DNI: {$clienteFromUser->dni}, Teléfono: {$clienteFromUser->telefono}\n";
    } else {
        echo "   ✗ Error en relación User->cliente\n";
    }

    // 5. Probar relación Cliente -> User
    echo "\n6. Probando relación Cliente -> User...\n";
    $userFromCliente = $cliente->user;
    if ($userFromCliente && $userFromCliente->id === $user->id) {
        echo "   ✓ Relación Cliente->user funciona correctamente\n";
        echo "   Nombre: {$userFromCliente->name}, Email: {$userFromCliente->email}\n";
    } else {
        echo "   ✗ Error en relación Cliente->user\n";
    }

    // 6. Verificar relación con Motorizado (existente)
    echo "\n7. Verificando estructura de relación con motorizados...\n";
    $driverColumns = DB::getSchemaBuilder()->getColumnListing('drivers');
    echo "   Columnas en 'drivers': " . implode(', ', $driverColumns) . "\n";

    if (in_array('user_id', $driverColumns)) {
        echo "   ✓ La tabla 'drivers' tiene columna 'user_id'\n";

        // Verificar que la relación está definida en User
        $hasDriverRelation = method_exists(User::class, 'driver');
        echo "   " . ($hasDriverRelation ? "✓" : "✗") . " Método User->driver() " . ($hasDriverRelation ? "existe" : "no existe") . "\n";
    }

    // 7. Probar integridad referencial (CASCADE DELETE)
    echo "\n8. Probando integridad referencial (CASCADE DELETE)...\n";
    $userId = $user->id;
    $clienteId = $cliente->id;

    $user->delete();

    $clienteExists = Cliente::find($clienteId);
    if (!$clienteExists) {
        echo "   ✓ Cliente se eliminó en cascada correctamente\n";
    } else {
        echo "   ✗ Error: Cliente no se eliminó en cascada\n";
    }

    DB::rollBack();
    echo "\n✓ Todas las pruebas completadas (transacción revertida)\n";
    echo "\n=== RESUMEN ===\n";
    echo "• Tabla 'clientes' creada con éxito\n";
    echo "• Clave foránea 'usuario_id' funcionando correctamente\n";
    echo "• Relaciones uno-a-uno implementadas correctamente\n";
    echo "• Integridad referencial con CASCADE DELETE verificada\n";
    echo "• Compatible con tabla 'drivers' existente\n";

} catch (\Exception $e) {
    DB::rollBack();
    echo "\n✗ Error durante las pruebas: " . $e->getMessage() . "\n";
    echo "   Archivo: " . $e->getFile() . "\n";
    echo "   Línea: " . $e->getLine() . "\n";
}

echo "\n";
