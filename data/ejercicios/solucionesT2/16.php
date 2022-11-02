<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista</title>
</head>

<body>

    <!-- Creación del Formulario -->

    <form name="formulario" method="POST" action="">
        <p>
            <label for="element">Elemento: </label>
            <input type="text" name="element" id="element" />

            <?php

            // Si el Method el POST

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle

                if (isset($_POST['send']) && !empty($_POST['send'])) {

                    // Si el parámetro hiddens del formulario por POST existe y no está vacío, recorre su contenido con un foreach y 
                    // crea un input hidden para guardar su valor bajo el mismo name para guardarlos en oculto

                    if (isset($_POST['hiddens']) && !empty($_POST['hiddens'])) {

                        foreach ($_POST['hiddens'] as $hiddens) {
                            echo "<input type='hidden' name='hiddens[]' value='" . $hiddens . "' /> ";
                        }
                    }


                    // Si el parámetro element del formulario por POST existe y no está vacío, crea un input hidden para guardar su 
                    // valor bajo el name hiddens[] en oculto

                    if (isset($_POST['element']) && !empty($_POST['element'])) {

                        echo "<input type='hidden' name='hiddens[]' value='" . $_POST['element'] . "' /> ";

                    }

                }
            }

            ?>
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <br>
    <hr><br>

    <?php

    // Si el Method el POST

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle

        if (isset($_POST['send']) && !empty($_POST['send'])) {


            // Si el parámetro hiddens del formulario por POST existe y no está vacío, recorre su contenido con un foreach y lo muestra

            if (isset($_POST['hiddens']) && !empty($_POST['hiddens'])) {

                foreach ($_POST['hiddens'] as $hiddens) {
                    echo $hiddens . "<br>";
                }
            }

            // Si el parámetro element del formulario por POST existe y no está vacío, lo muestra

            if (isset($_POST['element']) && !empty($_POST['element'])) {

                echo $_POST['element'] . "<br>";
            }
            
        } else {

            echo "No viene de formulario";
        }
    }

    ?>

</body>

</html>