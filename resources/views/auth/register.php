<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Sistema de Motorizados</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/auth.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <img src="../../assets/img/logo.png" alt="Logo" class="auth-logo">
                <h2>Crear Cuenta</h2>
            </div>
            <form id="register-form" action="../../api/auth/register.php" method="post">
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="form-group">
                    <label for="user_type">Tipo de Usuario</label>
                    <select id="user_type" name="user_type" required>
                        <option value="user">Cliente</option>
                        <option value="driver">Motorizado</option>
                    </select>
                </div>
                <button type="submit" class="btn primary full-width">Registrarse</button>
            </form>
            <div class="auth-footer">
                <p>¿Ya tienes una cuenta? <a href="login.html">Iniciar Sesión</a></p>
            </div>
        </div>
    </div>

    <script src="../../assets/js/auth.js"></script>
</body>
</html>