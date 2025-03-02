<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="register-container">
        <h1>Registro</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombreCompleto">Nombre completo:</label>
                <input type="text" id="nombreCompleto" name="nombreCompleto" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
    </div>
</body>
</html>