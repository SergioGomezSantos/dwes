<?php

// Si no tiene la cookie, redirige para ir al login

if (!isset($_COOKIE['userName'])) {
    header('Location: 18.php');
}

// Si el Method el POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        // Si el parámetro newWish del formulario por POST existe y no está vacío, lanzo addWish() con el $newWish limpio y redirect al menu
        // Si esta vacío, guardo el error

        if (isset($_POST['newWish']) && !empty($_POST['newWish'])) {

            $this->addWish(htmlspecialchars($_POST['newWish']));
            header('Location: 18.php?option=menu');
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

        <form name="newForm" method="POST" action="">
            <label for="newWish">Nuevo Deseo: </label>
            <input type="text" name="newWish" id="newWish" />
            <button type="submit" id="send" name="send" value="send">Añadir</button>
        </form>

        <!-- Muestro el error. Si no hay, no muestra nada -->
        <?= "<br>" . $error ?>

    </div>

</body>

</html>