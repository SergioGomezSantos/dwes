<?php

class App
{

    private const ROUTE = "list/23.txt";
    private const DEFAULT_TEXT = "Lista de Deseos: ";
    private const RESET_LIST = 16;

    private $name;

    public function __construct()
    {
        $this->name = "App del Ejercicio 23";
    }

    public function home()
    {
        include('views/home.php');
    }

    public function homeList()
    {

        if (!is_file($this::ROUTE)) {

            $fp = fopen($this::ROUTE, "w");
            fwrite($fp, $this::DEFAULT_TEXT);
        }

        $fp = fopen($this::ROUTE, "r");

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

    public function new()
    {
        include('views/new.php');
    }

    public function addWish($newWish)
    {
        $fp = fopen($this::ROUTE, "a");

        if (!$fp) {
            echo "Error al interactuar con el archivo";
        }

        fwrite($fp, PHP_EOL . "- " . $newWish);

        fclose($fp);
    }

    public function delete()
    {
        include('views/delete.php');
    }

    public function deleteList()
    {
        $fp = fopen($this::ROUTE, "r");

        if ($fp) {

            while (!feof($fp)) {
                $line = fgets($fp);
                $list[] = $line;
            }

            fclose($fp);
            unset($list[0]);

            foreach ($list as $key => $value) {
                echo '<option value="' . $key . '">' . trim($value, '-') . '</option>';
            }
        } else {
            echo "Error al leer el archivo";
        }
    }

    public function removeWish($delWish)
    {
        $fp = fopen($this::ROUTE, "a+");

        if ($fp) {

            while (!feof($fp)) {
                $line = fgets($fp);
                $list[] = $line;
            }

            unset($list[$delWish]);
            ftruncate($fp, 0);

            foreach ($list as $newLine) {
                fwrite($fp, $newLine);
            }

            fclose($fp);
        } else {
            echo "Error al leer el archivo";
        }
    }

    public function reset()
    {
        include('views/reset.php');
    }

    public function resetList()
    {
        $fp = fopen($this::ROUTE, "a");

        if (!$fp) {
            echo "Error al interactuar con el archivo";
        }

        ftruncate($fp, $this::RESET_LIST);

        fclose($fp);
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
