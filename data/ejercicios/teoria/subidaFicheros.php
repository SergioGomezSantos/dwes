<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form name="formulario" action="cargaFichero.php" method="POST" enctype="multipart/form-data">

        <label for="myFile">Fichero</label>
        <input type="file" name="myFile" id="myFile">

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php
    include 'footer.php';
    footer();
    ?>

</body>

</html>