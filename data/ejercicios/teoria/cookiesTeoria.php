<?php

// time(); epoch time | unix time -> seg since 1970

// time()+(24*60*60);
// strtotime("+1 day"); 

$array = ['Hola', 25, [1, 3, 5]];
$json = ["a" => 1, "b" => 2, "c" => 3];

setcookie('primeraCookie', 'aceptado', time() + 60);
setcookie('segundaCookie', serialize($array), time() + 600);
setcookie('terceraCookie', json_encode($json), time() + 600);

// setcookie('primeraCookie', 'aceptado', time()-120);
// unset($_COOKIE['primeraCookie']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['option']) && !empty($_POST['option'])) {

        switch ($_POST['option']) {
            case "set":

                addCookie();

                break;

            case "value":

                cookieValue();

                break;

            case "unset":

                removeCookie();

                break;

            default:
                break;
        }
    } else {

        echo "Error. No viene de formulario";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

    <br>

    <form name="form" method="POST" action="">
        <button type="submit" name="option" id="set" value="set">Set</button>
        <button type="submit" name="option" id="value" value="value">Valor</button>
        <button type="submit" name="option" id="unset" value="unset">Unset</button>
    </form>

    <?php

    include 'footer.php';


    echo "<br>" . "Valor Cookie Serializada: " . "<br>";
    print_r(unserialize($_COOKIE['segundaCookie']));

    echo "<br><br>" . "Valor Cookie Json: " . "<br>";
    print_r($_COOKIE['terceraCookie']);

    echo "<br><br>" . "Valor Cookie JsonDecode: " . "<br>";
    print_r(json_decode($_COOKIE['terceraCookie']));

    echo "<br>";
    footerVolver("cookies.php", "Cookies");

    ?>

    <?php

    function addCookie()
    {
        setcookie('primeraCookie', 'aceptado', time() + 60);
        cookieValue();
    }
    function cookieValue()
    {
        echo "<br>";
        echo isset($_COOKIE['primeraCookie']) ? "Valor: " . $_COOKIE['primeraCookie'] : "Ya no existe";
        echo "<br>";
    }

    function removeCookie()
    {
        setcookie('primeraCookie', '', time() - 120);
        unset($_COOKIE['primeraCookie']);
        cookieValue();
    }


    ?>
</body>

</html>