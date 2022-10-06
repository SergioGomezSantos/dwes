<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>
    <form name="formulario" method="POST" action="">
        <p>
            <label for="number1">Numero 1: </label>
            <input type="text" name="number1" id="numbers[]" />
        </p>

        <p>
            <label for="number2">Numero 2: </label>
            <input type="number" name="number2" id="number2" />
        </p>

        <p>
            Operador:
            <select id="operator" name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
        </p>
        <button type="submit" name="send" id="send" value="send">Enviar</button>
    </form>

    <?php

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

                echo "<br><hr><br> Datos Recibidos.<br><br>";
                echo $number1 . " " . $operator . " " . $number2 . " = " . $result;
            } else {

                echo "<p style=color:red>Los campos de numeros son obligatorios</p>";
            }
        } else {

            echo "No viene de formulario";
        }
    }
    ?>

</body>

</html>