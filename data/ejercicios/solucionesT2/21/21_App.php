<?php

class App
{

    private const METHOD = 'cambio';
    private $name;

    public function __construct()
    {
        $this->name = "Bienvenido a la App del Ejercicio 21";
    }

    public function home()
    {
        require('views/home.php');
    }

    public function colors()
    {
        require('views/colors.php');
    }

    public function cambio() 
    {
        if (isset($_GET['color']) && $_GET['method'] === $this::METHOD) {

            $_SESSION['color'] = htmlspecialchars($_GET['color']);
        }

        header('Location: 21.php');
        exit();
    }


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}
