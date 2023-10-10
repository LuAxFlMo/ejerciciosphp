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
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Inserte datos</a>
    </nav>


    <section>
        <form class="formulario" action="resultado.php" >
            <fieldset>
                <legend>Ayudanos ingresando tus datos</legend>

                <div class="formulario__campo">
                    <label for="">Semestre</label>
                    <select name="semestre" class="formulario__input-text" id="">

                        <option value="1">1</option>

                        <option value="2">2</option>

                        <option value="3">3</option>

                        <option value="4">4</option>

                        <option value="5">5</option>

                        <option value="6">6</option>

                        <option value="7">7</option>

                        <option value="8">8</option>

                        <option value="9">9</option>
                    </select>


                    <div class="formulario__campos">
                        <div class="formulario__campo">
                            <label for="">Ingresa tu primedio del semestre seleccionado</label>
                            <input class="formulario__input-text" type="number" placeholder="Ingresa tu promedio" name="promedio"></input>
                        </div>

                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton--formulario" type="submit" value="Enviar"></input>
                    </div>
            </fieldset>
        </form>
    </section>
</body>

</html>