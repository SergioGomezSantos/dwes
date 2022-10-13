<?php

include_once 'footer.php';
include_once 'manejadorExcepciones.php';

$nombreFichero = "ficheroEjemplo.txt";

write($nombreFichero, "Writted Line");

echo "Read by Caracters: <br>";
read($nombreFichero, "caracter");

echo "<br><br><hr><br>";

echo "Read by Lines: <br>";
read($nombreFichero, "line");

echo "<br><br><hr><br>";

echo "Read by Bytes: <br>";
read($nombreFichero, "bytes");

echo "<br>";


function write($nombreFichero, $text)
{
    $fp = fopen($nombreFichero, "a");

    if (!$fp) {
        echo "Error al interactuar con el archivo";
    }

    fwrite($fp, PHP_EOL . $text);

    fclose($fp);
}

function read($nombreFichero, $howToRead)
{

    $fp = fopen($nombreFichero, "r");

    if (!$fp) {
        echo "Error al leer el archivo";
    }

    switch ($howToRead) {

        case "caracter":

            while (!feof($fp)) {
                $caracter = fgetc($fp);
                echo $caracter === "\n" ? "<br>" : "";
                echo $caracter;
            }

            break;

        case "line":

            while (!feof($fp)) {
                $line = fgets($fp);
                echo $line;
            }

            break;

        case "bytes":

            $contenido = fread($fp, filesize($nombreFichero));
            print_r($contenido);

            break;

        default:
            echo "Modo de lectura desconocido";
            break;
    }

    fclose($fp);
}

footer();
