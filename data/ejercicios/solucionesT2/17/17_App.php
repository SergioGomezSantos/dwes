<?php

class App
{

    const LIMIT = 1000000;
    const LIMIT_PRIMOS = 10000;
    const LIMIT_POTENCIAS2 = 24;

    private $name;
    private $options = array();

    public function __construct()
    {
        $this->name = "App del Ejercicio 17";
        $this->options = array('Fibonacci', 'Factoriales', 'Primos', 'Potencias2');
    }

    public function index()
    {
        include('views/index.php');
    }

    public function fibonacci()
    {
        $stop = false;
        $fibonacci  = array(0, 1);
        $newFibonacci = 0;
        $i = 2;

        while (!$stop) {

            $newFibonacci = $fibonacci[$i - 1] + $fibonacci[$i - 2];

            if ($newFibonacci < $this::LIMIT) {
                
                $fibonacci[] = $newFibonacci;
                $i++;

            } else {
                $stop = true;
            }

        }

        foreach ($fibonacci as $num) {
            echo $num . "<br>";
        }
    }

    public function factoriales()
    {
        $stop = false;
        $factorial = 1;
        $num = 1;

        while (!$stop) {

            $factorial *=  $num;

            if ($factorial < $this::LIMIT) {
                echo $num . "!: " . $factorial . "<br>";
                $num++;
            } else {
                $stop = true;
            }
        }
    }

    public function primos()
    {
        $resultado = "";

        for ($i = 1; $i <= $this::LIMIT_PRIMOS; $i++) {

            $numDivsores = 0;

            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $numDivsores++;
                }
            }

            if ($numDivsores === 2 or $i === 1) {
                $resultado .= $i . " - ";
            }
        }

        $resultado = rtrim($resultado, " - ");
        echo $resultado;
    }

    public function potencias2()
    {
        for ($i = 0 ; $i <= $this::LIMIT_POTENCIAS2 ; $i++) {
            echo "2<sup>" . $i . "</sup>: " . pow(2, $i) . "<br>";
        }
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

    /**
     * Get the value of options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of options
     */
    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }
}
