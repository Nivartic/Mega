<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Driver;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    /**
     * Register a new driver with vehicle and documents.
     */
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'fullName' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8',
            'vehicleType' => 'required|in:moto,bicicleta,auto',
            'vehicleBrand' => 'required|string|max:255',
            'vehicleModel' => 'required|string|max:255',
            'licensePlate' => 'required|string|max:20',
            'dniUpload' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'antecedentesUpload' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'licenseUpload' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'soatUpload' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'propertyCardUpload' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'termsAccepted' => 'required|accepted',
        ]);

        try {
            // Iniciar transacción para asegurar que todos los datos se guarden correctamente
            DB::beginTransaction();

            // Crear usuario
            $user = User::create([
                'name' => $request->fullName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Crear conductor
            $driver = Driver::create([
                'user_id' => $user->id,
                'full_name' => $request->fullName,
                'date_of_birth' => $request->dob,
                'phone' => $request->phone,
                'terms_accepted' => true,
                'status' => 'pending',
            ]);

            // Crear vehículo
            Vehicle::create([
                'driver_id' => $driver->id,
                'type' => $request->vehicleType,
                'brand' => $request->vehicleBrand,
                'model' => $request->vehicleModel,
                'license_plate' => $request->licensePlate,
            ]);

            // Guardar documentos
            $documentTypes = [
                'dniUpload' => 'dni',
                'antecedentesUpload' => 'antecedentes',
                'licenseUpload' => 'license',
                'soatUpload' => 'soat',
                'propertyCardUpload' => 'property_card',
            ];

            foreach ($documentTypes as $inputName => $type) {
                if ($request->hasFile($inputName)) {
                    $path = $request->file($inputName)->store('documents/' . $driver->id, 'public');
                    
                    Document::create([
                        'driver_id' => $driver->id,
                        'type' => $type,
                        'file_path' => $path,
                    ]);
                }
            }

            // Confirmar transacción
            DB::commit();

            return response()->json(['success' => true, 'message' => '¡Registro completado con éxito!']);
        } catch (\Exception $e) {
            // Revertir transacción en caso de error
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Error al registrar: ' . $e->getMessage()], 500);
        }
    }
}