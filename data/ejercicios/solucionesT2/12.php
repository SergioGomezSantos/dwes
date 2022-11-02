<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario Nombre</title>
</head>

<body>

    <!-- Creación del Formulario -->

    <form name="formulario" method="POST" action="">
        <p>
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" />
        </p>
        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php

   // Si el Method el POST

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle
        // Si no existe o está vacío, avisa

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            // Si el parámetro name del formulario por POST no está vacío, muestra de la información
            // Si esta vacío, muetra un aviso en rojo

            if (!empty($_POST['name'])) {

                echo "<br><hr><br>" . "Datos Recibidos." . "<br>";
                echo "Saludos, " . $_POST['name'] . "<br>";

            } else {

                echo "<p style=color:red>El campo es obligatorio</p>";
            }

        } else {

            echo "No viene de formulario";
        }
    }
    ?>

</body>

</html>