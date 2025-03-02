<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/stylesDash.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header class="dashboard-header">
    <h1>Cocina con Camaleon</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-button">
            <i class="fi fi-rr-arrow-circle-right"></i>
        </button>
    </form>
</header>



        <!-- Main -->
        <main class="dashboard-main">
            <div class="recipe-card" style="background-image: url('{{ asset('images/tacos.jpg') }}');">
                <div class="overlay"></div>
                <h2>Receta 1: Tacos al Pastor</h2>
                <p>Deliciosos tacos de cerdo marinado con piña y especias.</p>
            </div>
            <div class="recipe-card" style="background-image: url('{{ asset('images/pozole.jpg') }}');">
                <div class="overlay"></div>
                <h2>Receta 2: Pozole</h2>
                <p>Un caldo tradicional mexicano con maíz y carne de cerdo o pollo.</p>
            </div>
            <div class="recipe-card" style="background-image: url('{{ asset('images/chiles.jpg') }}');">
                <div class="overlay"></div>
                <h2>Receta 3: Chiles en Nogada</h2>
                <p>Chiles poblanos rellenos de picadillo, cubiertos con salsa de nogada.</p>
            </div>
        </main>
    </div>
</body>
</html>
