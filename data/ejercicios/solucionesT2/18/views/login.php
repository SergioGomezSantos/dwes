<?php

// Si se llega con la cookie activa, se borra

if (isset($_COOKIE['userName'])) {
    setCookie('userName', '', time() - 120, '/');
    unset($_COOKIE['userName']);
}

// Si el Method el POST

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        // Si el parámetro userName del formulario por POST existe y no está vacío, lanzo auth() con el $userName limpio
        // Si esta vacío, guardo el error

        if (isset($_POST['userName']) && !empty($_POST['userName'])) {

            $this->auth(htmlspecialchars($_POST['userName']));
            
        } else {

            $error = "Faltan Credenciales";
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

        <form name="form" action="" method="POST">

            <label for="userName">Usuario: </label>
            <input type="text" name="userName" id="userName" />

            <button type="submit" name="send" id="send" value="send">Enviar</button>
        </form>

        <!-- Muestro el error. Si no hay, no muestra nada -->
        <?= "<br>" . $error ?>

    </div>

</body>

</html>