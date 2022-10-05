<?php

include_once 'footer.php';

$array = [
    0 => 'A',
    1 => 'B',
    2 => 'C'
];

$array[] = 'D';
printArray($array, 'Array');

echo '<br>';

unset($array[2]);
printArray($array, 'unset [2]');



echo '<br><hr><br>';



echo 'print_r <br>';
print_r($array);

echo '<br><br>';

echo 'var_dump <br>';
var_dump($array);



echo '<br><br><hr><br>';



$arrayNumeros = [];
$arrayNumeros[] = 1;
$arrayNumeros[] = 2;
$arrayNumeros[] = 3;
printArray($arrayNumeros, 'Array Numeros');
echo '<br>';

foreach ($arrayNumeros as &$valor) {
    $valor++;
}

printArray($arrayNumeros, 'Array Numeros++');



echo '<br><hr><br>';



$arrayEliminar = ['A', 'B', 'C'];
printArray($arrayEliminar, 'Array a Eliminar');
echo '<br>';

unset($arrayEliminar[1]);
printArray($arrayEliminar, 'unset [1]');
echo '<br>';

$arrayEliminar[7] = 'B';
printArray($arrayEliminar, 'Add [7]');



echo '<br><hr><br>';



printArray($arrayEliminar, 'Array');
echo '<br>';

$arrayEliminarSort = $arrayEliminar;
$arrayEliminarRsort = $arrayEliminar;
$arrayEliminarKsort = $arrayEliminar;

sort($arrayEliminarSort);
rsort($arrayEliminarRsort);
ksort($arrayEliminarKsort);

printArray($arrayEliminarKsort, 'ksort Array');
echo '<br>';

printArray($arrayEliminarSort, 'sort Array');
echo '<br>';

printArray($arrayEliminarRsort, 'rsort Array');



echo '<br><hr><br>';



$persona = [
    "nombre" => 'A',
    "edad" => 1
];

$persona['ciudad'] = 'Z';
$persona[] = 2;

printArray($persona, 'Persona');
echo '<br>';



echo '<br><hr><br>';


$arrayArrays = [
    [
        1, 2, 3
    ],
    [
        'A', 'B', 'C'
    ]
];

printArrayDouble($arrayArrays, 'Array de Arrays');



function printArray($array, $text)
{
    echo $text . '<br>';

    foreach ($array as $clave => $valor) {
        echo $clave . ' => ' . $valor;
        echo '<br>';
    }
};


function printArrayDouble($arrays, $text)
{
    echo $text . '<br>';

    foreach ($arrays as $array => $innerArray) {

        echo 'Array ' . $array . '<br>';

        foreach ($innerArray as $clave => $valor) {
            echo $clave . '=>' . $valor . "<br/>";
        }
    }
};

footer();
