<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Datos personales</title>
</head>

<body>
    <table border="solid">
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Edad</td>
            <td>Teléfono</td>
            <td>Email</td>
        </tr>
        <?php
            echo "<tr>";
            $name = "Sergio";
            $surnames = ["Gómez", "Santos"];
            $age = 22;
            $phoneNumber = 1234;
            $email = "gomez.sergio.smr@gmail.com";

            echo "<td>$name</td>";

            echo "<td>";
            foreach ($surnames as $surname) {
                echo $surname . " ";
            }
            echo "</td>";

            echo "<td>$age</td>";
            echo "<td>$phoneNumber</td>";
            echo "<td>$email</td>";
            echo "</tr>";

            echo "<tr>";
            print("<td>" . $name . '</td>');

            echo "<td>";
            foreach ($surnames as $surname) {
                echo $surname . " ";
            }
            echo "</td>";

            print("<td>" . $age . '</td>');
            print("<td>" . $phoneNumber . '</td>');
            print("<td>" . $email . '</td>');
            echo '</tr>';
        ?>
    </table>
</body>

</html>