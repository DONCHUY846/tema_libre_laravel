<!DOCTYPE html>
<html lang="es"> <!-- Define el idioma de la página -->
<head>
    <meta charset="UTF-8"> <!-- Establece la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que la página sea responsiva -->
    <title>Recetas</title> <!-- Título de la página que aparece en la pestaña del navegador -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Enlaza el archivo CSS -->
</head>
<body>
    <div class="container"> <!-- Contenedor principal para centrar el contenido -->
        <h1 class="titulo">Recetas Deliciosas</h1> <!-- Título principal de la página -->

        <div class="receta"> <!-- Contenedor para una receta -->
            <h2 class="titulo-receta">Nombre de la Receta 1</h2> <!-- Título de la receta -->
            <img src="ruta/a/la/imagen1.jpg" alt="Imagen del plato 1" class="imagen-receta"> <!-- Imagen de la receta -->
            <h3>Ingredientes</h3> <!-- Subtítulo para ingredientes -->
            <ul class="ingredientes"> <!-- Lista de ingredientes -->
                <li>Ingrediente 1</li>
                <li>Ingrediente 2</li>
                <li>Ingrediente 3</li>
            </ul>
            <h3>Instrucciones</h3> <!-- Subtítulo para instrucciones -->
            <p class="instrucciones">Instrucciones para preparar la receta 1.</p> <!-- Texto con instrucciones -->
        </div>

        <div class="receta"> <!-- Contenedor para otra receta -->
            <h2 class="titulo-receta">Nombre de la Receta 2</h2>
            <img src="ruta/a/la/imagen2.jpg" alt="Imagen del plato 2" class="imagen-receta">
            <h3>Ingredientes</h3>
            <ul class="ingredientes">
                <li>Ingrediente 1</li>
                <li>Ingrediente 2</li>
                <li>Ingrediente 3</li>
            </ul>
            <h3>Instrucciones</h3>
            <p class="instrucciones">Instrucciones para preparar la receta 2.</p>
        </div>

        <!-- Agrega más recetas aquí -->
        
    </div>
</body>
</html>