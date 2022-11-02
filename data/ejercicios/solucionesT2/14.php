<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>

    <!-- Creación del Formulario -->

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

    // Si el Method el POST

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Si send existe y no esta vacío (Ha pulsado el boton con esos parámetro del formulario) entra en el bucle
        // Si no existe o está vacío, avisa

        if (isset($_POST['send']) && !empty($_POST['send'])) {

            // Si ninguno de los parámetros number1/number2/operator del formulario por POST esta vacío, entra en el bucle
            // Si alguno está vacío, muestra un aviso en rojo

            if (!empty($_POST['number1']) && !empty($_POST['number2']) && !empty($_POST['operator'])) {

                // Guardo los parámetros number1/number2/operator del formulario por POST y declaro la variable $result
                
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $operator = $_POST['operator'];
                $result;


                // Switch al $operator para operar con los 2 números según el operador elegido

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

                echo "<br><hr><br>" . "Datos Recibidos.". "<br><br>";
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