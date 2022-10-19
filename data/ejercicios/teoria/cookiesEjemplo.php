<!-- Seleccionar entre español, ingles y aleman.
Seleccionar una marca de coche preferida.

Mostrar saludo en el idioma elegido junto a la marca.

Guardar la información en cookies.
El idioma por defecto será español. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cookies Ejemplo</title>
</head>

<body>
    <form name="formulario" method="POST" action="cookiesEjemploShow.php">
        <p>Idioma:
            <select id="languaje" name="languaje">
                <option value="spanish">Español</option>
                <option value="english">Inglés</option>
                <option value="deutch">Alemán</option>
            </select>
        </p>

        <p>Marca:
            <input type="radio" name="brand" id="brand1" value="brand1" checked>
            <label for="brand1">Brand 1</label>
            <input type="radio" name="brand" id="brand2" value="brand2">
            <label for="brand2">Brand 2</label>
            <input type="radio" name="brand" id="brand3" value="brand3">
            <label for="deutch">Brand 3</label>
        </p>

        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php 
        include 'footer.php';
        footerVolver("cookies.php", "Cookies");
    ?>
</body>

</html>