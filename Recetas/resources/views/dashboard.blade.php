<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header class="dashboard-header">
            <h1>Bienvenido al Dashboard</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">Cerrar Sesión</button>
            </form>
        </header>

        <!-- Main -->
        <main class="dashboard-main">
            <div class="recipe-card">
                <h2>Receta 1: Tacos al Pastor</h2>
                <p>Deliciosos tacos de cerdo marinado con piña y especias.</p>
            </div>
            <div class="recipe-card">
                <h2>Receta 2: Pozole</h2>
                <p>Un caldo tradicional mexicano con maíz y carne de cerdo o pollo.</p>
            </div>
            <div class="recipe-card">
                <h2>Receta 3: Chiles en Nogada</h2>
                <p>Chiles poblanos rellenos de picadillo, cubiertos con salsa de nogada.</p>
            </div>
        </main>
    </div>
</body>
</html>