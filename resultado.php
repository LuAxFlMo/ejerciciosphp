<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos.css">

    <!-- mandar a traer las letras de googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <header class="titulo">
        <h1>Ejercicios PHP<span class="titulo__secundario">clase 05/10/2023</span></h1>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace " href="index.php">Inserte datos</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="resultado.php">Resultados</a>
    </nav>


    <section>
        <?php
        $nDato1c = $_GET["promedio"];


        if ($nDato1c == 0 || $nDato1c == 1 || $nDato1c == 2 || $nDato1c == 3) {
            echo "<h2>tssss... <br>a rezarle al de arriba</h2>";
        } else if ($nDato1c == 4 || $nDato1c == 5) {
            echo "<h2>casi bro</h2>";
        } else if ($nDato1c == 5 || $nDato1c == 6) {
            echo "<h2>panzaste <br>SUERTUDOTE!!</h2>";
        } else if ($nDato1c == 7 || $nDato1c == 8) {
            echo "<h2>Echale mas ganas</h2>";
        } else if ($nDato1c == 9 || $nDato1c == 10) {
            echo "<h2>BUENAAA <br>Sigue asi </h2>";
        } else {
            echo "Invalido";
        }
        ?>
    </section>
</body>

</html>