<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <h1>Datos del Archivo: </h1>

    <?php

    include 'footer.php';

    if (isset($_POST['send'])) {

        echo "Nombre del fichero: " . $_FILES['myFile']['name'] . "<br>";
        echo "Extensión del fichero: " . $_FILES['myFile']['type'] . "<br>";
        echo "Tamaño del fichero: " . $_FILES['myFile']['size'] . "<br>";
        echo "Nombre del fichero temporal: " . $_FILES['myFile']['tmp_name'] . "<br><br>";

        $destino = "subidos/" . $_FILES['myFile']['name'];
        $flag = move_uploaded_file($_FILES['myFile']['tmp_name'], $destino);
        echo $flag ? "Archivo Subido" : "Error al subir el Archivo";

    } else {
        echo "No hay Fichero";
    }


    footerVolver('subidaFicheros.php', 'Formulario'); ?>
</body>

</html>