<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>
    <form name="formulario" method="POST" action="14_read.php">
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
</body>

</html>