<?php
session_start();

// Si no tiene la sesión con userName, redirige para ir al login

if (!isset($_SESSION['userName'])) {
    header('Location: 20.php');
}

// Si el Method el POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        // Si el parámetro removeWish del formulario por POST existe y no está vacío, lanzo removeWish() con el $removeWish limpio y redirect al menu
        // Si esta vacío, guardo el error

        if (isset($_POST['removeWish']) && !empty($_POST['removeWish'])) {

            $this->removeWish($_POST['removeWish']);
            header('Location: 20.php?option=menu');
            exit();

        } else {

            $error = "Falta el Deseo";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    // Incluyo la cabecera, donde está el nombre de la App y el Nav con los enlaces para cambiar ?option
    include('header.php');

    ?>

    <br>

    <div>

        <!-- Creación del Formulario -->

        <form name="deleteForm" method="POST" action="">
            <label>Deseo a Borrar: </label>
            <select id="removeWish" name="removeWish">
                <?php
                // Lanzo deleteList() para que cree la lista desplegable de deseos
                $this->deleteList();
                ?>
            </select>
            <button type="submit" id="send" name="send" value="send">Borrar</button>

        </form>

        <!-- Muestro el error. Si no hay, no muestra nada -->
        <?= "<br>" . $error ?>

    </div>

</body>

</html>