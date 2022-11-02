<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nombres[]</title>
</head>

<body>

    <!-- Creación del Formulario -->

    <form name="formulario" method="POST" action="">
        <p>
            <label for="name1">Nombre 1: </label>
            <input type="text" name="names[]" id="name1" />
        </p>

        <p>
            <label for="name2">Nombre 2: </label>
            <input type="text" name="names[]" id="name2" />
        </p>

        <p>
            <label for="name1">Nombre 3: </label>
            <input type="text" name="names[]" id="name3" />
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php

    // Si el Method el POST

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle
        // Si no existe o está vacío, avisa

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            // Echo del texto informativo

            echo "<br><hr><br>" . "Datos Recibidos." . "<br><br>";
            echo "Nombres: ";


            // Si el parámetro names del formulario por POST existe y no está vacío, recorre su contenido con un foreach y muestra cada nombre recibido
            // Si está vacío, lo muestra (Desde el formulario puede llegar un array sin nombres, es una medida de seguridad)

            if (isset($_POST['names']) && !empty($_POST['names'])) {

                foreach ($_POST['names'] as $name) {

                    if (empty($name)) {
                        echo "- ";
                    }

                    echo $name . " ";
                }

                echo "<br>";

            } else {

                echo "Sin array de nombres" . "<br>";
            }
        } else {

            echo "No viene de formulario";
        }
    }
    ?>

</body>

</html>