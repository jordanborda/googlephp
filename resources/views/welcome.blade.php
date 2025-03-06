<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login con Google</title>
</head>
<body>
    <h1>Bienvenido</h1>
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <a href="{{ route('auth.google') }}" style="padding: 10px 20px; background: #4285F4; color: #fff; text-decoration: none; border-radius: 5px;">
        Iniciar sesión con Google
    </a>
</body>
</html>
