<?php

class App
{

    // Declaración de constantes y variables a utilziar con la clase

    const LIMIT = 1000000;
    const LIMIT_PRIMOS = 10000;
    const LIMIT_POTENCIAS2 = 24;

    private $name;
    private $options = array();


    // Settear $name y $options en el __construct()

    public function __construct()
    {
        $this->name = "App del Ejercicio 17";
        $this->options = array('Fibonacci', 'Factoriales', 'Primos', 'Potencias2');
    }


    // Función para lanzar la vista index.php;

    public function index()
    {
        include('views/index.php');
    }


    // Función para hacer la sucesión de fibonacci. Se lanza desde el index.php al interactuar

    public function fibonacci()
    {

        // Delcaración e inicialización de variables a utilizar

        $stop = false;
        $fibonacci  = array(0, 1);
        $newFibonacci = 0;
        $i = 2;


        // Empiezo el bucle con $i inicializado a 2. Consigo el nuevo a número con los valores de la posicion 1 ($i - 1) y 0 ($i - 2).
        // Compruebo si el nuevo número es menor que el límite (constante) y si es así, lo guardo en el array de $fibonacci. Aumento $i y repito el bucle
        // Si es mayor que el límite, cambio $stop a true y saldrá del bucle

        while (!$stop) {

            $newFibonacci = $fibonacci[$i - 1] + $fibonacci[$i - 2];

            if ($newFibonacci < $this::LIMIT) {
                
                $fibonacci[] = $newFibonacci;
                $i++;

            } else {

                $stop = true;
            }

        }


        // Recorro $fibonacci ya completo y echo para cada número

        foreach ($fibonacci as $num) {
            echo $num . "<br>";
        }
    }


    // Función para sacar los factoriales. Se lanza desde el index.php al interactuar

    public function factoriales()
    {

        // Declaración e inicialización de variables a utilizar

        $stop = false;
        $factorial = 1;
        $num = 1;


        // Guardo el $factorial el valor que tenía * $num
        // Si el nuevo valor de $factorial es menor que el límite (constante), echo para mostrarlo, aumento $num y repito el bucle
        // Si es mayor que el límite, cambio $stop a true y saldrá del bucle

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


    // Función para sacar los números primos. Se lanza desde el index.php al interactuar
    // Son muchos números, la función tarda un poco

    public function primos()
    {

        // Declaración e inicialización de las variables a utilizar

        $resultado = "";
        $numDivsores = 0;


        // Bucle for con $i dando x vueltas respecto al límite (constante)
        // Reseteo $numDivsores
        // Bucle 2, donde va aumentando $j hasta igualar a $i 
        // Para cada vuelta del Bucle 2, compruebo si $j es divisor de $i y si es así, aumento $numDivsores
        // Si al acabar el Bucle 2, $numDivsores es 2 || 1, añado $i al $resultado, porque es primo

        for ($i = 1; $i <= $this::LIMIT_PRIMOS; $i++) {

            $numDivsores = 0;

            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $numDivsores++;
                }
            }

            if ($numDivsores === 2 || $i === 1) {
                $resultado .= $i . " - ";
            }
        }


        // Elimino el último " - " del $resultado para hacerlo más estético
        // Echo para mostar $resultado

        $resultado = rtrim($resultado, " - ");
        echo $resultado;
    }


    // Función para hacer las potencias de 2. Se lanza desde el index.php al interactuar

    public function potencias2()
    {

        // Bucle for con $i dando x vueltas respecto al límite (constante)

        for ($i = 0 ; $i <= $this::LIMIT_POTENCIAS2 ; $i++) {

            // Echo para mostrar la potencia

            echo "2<sup>" . $i . "</sup>: " . pow(2, $i) . "<br>";
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
