<?php

// Si no tiene la cookie, redirige para ir al login

if (!isset($_COOKIE['userName'])) {
    header('Location: 18.php');
}

// Si el Method el POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        // Lanzo resetList() y redirect al menu

        $this->resetList();
        header('Location: 18.php?option=menu');
        exit();
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
            <label for="send">¿Seguro?</label>
            <button type="submit" id="send" name="send" value="send">Vaciar</button>

        </form>

    </div>

</body>

</html>