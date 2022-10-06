<?php

require 'footer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['send']) && !empty($_POST['send'])) {

        if (!empty($_POST['number1']) && !empty($_POST['number2']) && !empty($_POST['operator'])) {

            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operator = $_POST['operator'];
            $result;

            switch ($operator) {

                case "+":
                    $result = $number1 + $number2;
                    break;
                case "-":
                    $result = $number1 - $number2;
                    break;
                case "*":
                    $result = $number1 * $number2;
                    break;
                case "/":
                    $result = $number1 / $number2;
                    break;
                case "%":
                    $result = $number1 % $number2;
                    break;
                default:
                    break;
            }

            echo $number1 . " " . $operator . " " . $number2 . " = " . $result;

        } else {
            header('Location: ' . '14.php');
        }
    } else {

        echo "No viene de formulario";
    }

    footer('14.php');
}
