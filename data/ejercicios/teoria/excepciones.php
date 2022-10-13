<?php

include_once('manejadorExcepciones.php');
include_once('footer.php');

function inverso($num) {
    if ($num === 0) {
        throw new customException("Excepcion al dividir por 0");
        // throw new Exception("Num 0 introucido");
    }
    return 1/$num;
}

try {
    echo "El invero de 5 es " . inverso(5);
} catch(Exception $e) {
    echo "Excepcion " . $e->getCode() . ": " . $e->getMessage();
} finally {
    echo "<br>Finally<br>";
}


echo "<br><hr><br>";


try {
    echo "El invero de 0 es " . inverso(0);
} catch(customException $e) {
    echo $e->customError();
} finally {
    echo "<br>Finally<br>";
}


footer();