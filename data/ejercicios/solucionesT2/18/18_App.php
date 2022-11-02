<?php

class App
{

    // Declaración de constantes y variables a utilziar con la clase

    private const ROUTE = "lists/%s.txt";
    private const DEFAULT_TEXT = "Lista de Deseos: ";
    private const RESET_LIST = 16;

    private $name;
    private $options = array();


    // Settear $name y $options en el __construct()

    public function __construct()
    {
        $this->name = "App del Ejercicio 18";
        $this->options = array('menu', 'new', 'delete', 'reset');
    }


    // Función para lanzar la vista login.php;

    public function login()
    {
        include('views/login.php');
    }


    // Funcion auth()
    // Se lanza desde login.php
    // Recibe $userName recogido del POST del formulario después de pasar por htmlspecialchars

    public function auth($userName)
    {
        // Setcookie con el valor recibido en $userName
        // Redirección a ?option=menu para que se lance home() desde 18.php

        setcookie('userName', $userName, time() + 120);
        header('Location: 18.php?option=menu');
        exit();
    }


    // Función para lanzar la vista home.php;

    public function home()
    {
        include('views/home.php');
    }


    // Función homeList()
    // Se lanza desde home.php

    public function homeList()
    {
        // Sprintf con la routa (constante) y el nombre de usuario (cookie) para tener la routa del archivo del usuario

        $route = sprintf($this::ROUTE, $_COOKIE['userName']);


        // Si la routa coincide con un fichero, fopen con w para crearlo y lo cierro

        if (!is_file($route)) {

            $fp = fopen($route, "w");
            fwrite($fp, $this::DEFAULT_TEXT);
            fclose($fp);
        }


        // Abro el fichero en modo lectura

        $fp = fopen($route, "r");


        // Si existe, lo leo línea a línea mostrandolas con echo. Al acabar lo cierro
        // Si no existe, muestro mensaje de error

        if ($fp) {

            while (!feof($fp)) {
                $line = fgets($fp);
                echo $line . "<br>";
            }

            fclose($fp);
        } else {

            echo "Error al leer el archivo";
        }
    }


    // Función para lanzar la vista new.php;

    public function new()
    {
        include('views/new.php');
    }


    // Funcion addWish()
    // Se lanza desde new.php
    // Recibe $newWish recogido del POST del formulario después de pasar por htmlspecialchars

    public function addWish($newWish)
    {
        // Sprintf con la routa (constante) y el nombre de usuario (cookie) para tener la routa del archivo del usuario
        // Abro el fichero con permisos de escritura

        $route = sprintf($this::ROUTE, $_COOKIE['userName']);
        $fp = fopen($route, "a");


        // Si el fichero existe, entra al bucle
        // Si no existe, muestro el error

        if ($fp) {

            // Escribo el equivalente a "\n - $newWish"
            //Cierro el fichero

            fwrite($fp, PHP_EOL . "- " . $newWish);
            fclose($fp);

        } else {

            echo "Error al interactuar con el archivo";
        }
    }


    // Función para lanzar la vista delete.php;

    public function delete()
    {
        include('views/delete.php');
    }


    // Funcion deletelist()
    // Se lanza desde delete.php

    public function deleteList()
    {
        // Sprintf con la routa (constante) y el nombre de usuario (cookie) para tener la routa del archivo del usuario
        // Abro el fichero con permisos de lectura
        // Inicializo $list

        $route = sprintf($this::ROUTE, $_COOKIE['userName']);
        $fp = fopen($route, "r");
        $list = [];


        // Si existe el fichero, entra al bucle
        // Si no existe, muestra el error

        if ($fp) {

            // Leo el fichero línea a línea y las añado a $list[]

            while (!feof($fp)) {
                $line = fgets($fp);
                $list[] = $line;
            }


            // Quito del array de líneas la primera, que equivale a la constante DEFAULT_TEXT
            // Cierro el fichero

            unset($list[0]);
            fclose($fp);


            // Recorro el array $list y voy creando inputs con el texto del deseo sin "-" y value la posición del deseo dentro del array

            foreach ($list as $key => $value) {
                echo '<option value="' . $key . '">' . trim($value, '-') . '</option>';
            }
        } else {

            echo "Error al leer el archivo";
        }
    }


    // Función removeWish()
    // Se lanza desde delete.php
    // Recibe $delWish recogido del POST del formulario después de pasar por htmlspecialchars

    public function removeWish($delWish)
    {
        // Sprintf con la routa (constante) y el nombre de usuario (cookie) para tener la routa del archivo del usuario
        // Abro el fichero con permisos de lectura y escritura
        // Inicializo $list

        $route = sprintf($this::ROUTE, $_COOKIE['userName']);
        $fp = fopen($route, "a+");
        $list = [];


        // Si existe el fichero, entra al bucle
        // Si no existe, muestra el error

        if ($fp) {

            // Leo el fichero línea a línea y las añado a $list[]

            while (!feof($fp)) {
                $line = fgets($fp);
                $list[] = $line;
            }


            // Elimino del array la posición del valor de $delWish
            // Reset el fichero borrando hasta la posicion 0 del fichero

            unset($list[$delWish]);
            ftruncate($fp, 0);


            // Recorro $list y reescribo las líneas

            foreach ($list as $newLine) {
                fwrite($fp, $newLine);
            }


            // Cierro el archivo

            fclose($fp);

        } else {

            echo "Error al leer el archivo";
        }
    }


    // Función para lanzar la vista reset.php;

    public function reset()
    {
        include('views/reset.php');
    }


    // Funcion resetList()
    // Se lanza desde reset.php

    public function resetList()
    {
        // Sprintf con la routa (constante) y el nombre de usuario (cookie) para tener la routa del archivo del usuario
        // Abro el fichero con permisos de lectura y escritura

        $route = sprintf($this::ROUTE, $_COOKIE['userName']);
        $fp = fopen($route, "a");


        // Si existe el fichero, entra al bucle
        // Si no existe, muestra el error

        if ($fp) {

            // Borro el archivo hasta la posición de la constante
            // Cierro el archivo

            ftruncate($fp, $this::RESET_LIST);
            fclose($fp);

        } else {

            echo "Error al interactuar con el archivo";
        }

    }

    /**
     * Getter para $name
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter para $name
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

        /**
     * Getter para $options
     * Get the value of options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Setter para $options
     * Set the value of options
     */
    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }
}
