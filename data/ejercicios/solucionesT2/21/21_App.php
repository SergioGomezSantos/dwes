<?php

class App
{

    // Declaración de constantes y variables a utilziar con la clase
    // METHOD es public para acceder desde 19.php

    public const METHOD = 'cambio';
    private $name;


    // Settear $name en el __construct()

    public function __construct()
    {
        $this->name = "Bienvenido a la App del Ejercicio 21";
    }


    // Función para lanzar la vista home.php;

    public function home()
    {
        require('views/home.php');
    }


    // Funcion cambio()

    public function cambio() 
    {

        // Si el parámetro color del GET existe y si su contenido es "cambio", añade a la sesion el contenido limpio

        if (isset($_GET['color']) && $_GET['method'] === $this::METHOD) {

            $_SESSION['color'] = htmlspecialchars($_GET['color']);
        }


        // Redirect a 21.php

        header('Location: 21.php');
        exit();
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
}
