<?php

class App
{

    const ROUTE = "lists/";
    const EXTENSION = ".txt";
    const DEFAULT_TEXT = "Lista de Deseos: ";
    const RESET_LIST = 16;

    private $name;

    public function __construct()
    {
        $this->name = "App del Ejercicio 18";
    }

    public function login()
    {
        include('views/login.php');
    }


    public function home()
    {
        include('views/home.php');
    }

    public function homeList($userName)
    {

        $route = $this::ROUTE . $userName . $this::EXTENSION;

        if (!is_file($route)) {

            $fp = fopen($route, "w");
            fwrite($fp, $this::DEFAULT_TEXT);
        }

        $fp = fopen($route, "r");

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

    public function addWish($newWish, $userName)
    {
        $fp = fopen($this::ROUTE . $userName . $this::EXTENSION, "a");

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

    public function deleteList($userName)
    {

        $fp = fopen($this::ROUTE . $userName . $this::EXTENSION, "r");

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

    public function removeWish($delWish, $userName)
    {
        $fp = fopen($this::ROUTE . $userName . $this::EXTENSION, "a+");

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

    public function resetList($userName)
    {
        $fp = fopen($this::ROUTE . $userName . $this::EXTENSION, "a");

        if (!$fp) {
            echo "Error al interactuar con el archivo";
        }

        ftruncate($fp, $this::RESET_LIST);

        fclose($fp);
    }

    public function close()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        setCookie(session_name(), '', time() - 60, '/');
        header('Location: 18.php');
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
