<?php

include 'footer.php';

// Cargar Archivo

$datos = simplexml_load_file("xml/empleados.xml");

if (!$datos) {
    echo "No hay datos";
    exit();
}

print_r($datos);

echo "<br><br>" . "Recorrer el fichero: " . "<br>";
foreach($datos as $dato) {
    print_r($dato);
}

echo "<br><br><hr><br>";



// Extraer información

$nombres = $datos->xpath("//nombre");
$apellidos = $datos->xpath("//apellidos");
$edades = $datos->xpath("//edad");

for ($i = 0 ; $i < count($nombres) ; $i++) {

    echo "Empleado: " . $i;
    echo "<ul>";
    echo "<li>Nombre: " . $nombres[$i] . "</li>";
    echo "<li>Apellidos: " . $apellidos[$i] . "</li>";
    echo "<li>Edad: " . $edades[$i] . "</li>";
    echo "</ul>";
}

echo "<br><br><hr><br>";


// Validacion

$dept = new DOMDocument();
$dept->load("xml/empleados.xml");
$respuesta = $dept->schemaValidate("xml/departamento.xsd");

echo $respuesta ? "Documento Válido" : "Documento inválido";



    
echo "<br>";

footer();