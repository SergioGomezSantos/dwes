<?php

include_once 'footer.php';

$var2 = "2";
$var3 = "";
$var4;

echo '$var2 = "2" => isset - ';
echo isset($var2) ? 'True.' : 'False.';
echo ' empty - ';
echo empty($var2) ? 'True.' : 'False.';
echo '<br>';

echo '$var3 = "" => isset - ';
echo isset($var3) ? 'True.' : 'False.';
echo ' empty - ';
echo empty($var3) ? 'True.' : 'False.';
echo '<br>';

echo '$var4 => isset - ';
echo isset($var4) ? 'True.' : 'False.';
echo ' empty - ';
echo empty($var4) ? 'True.' : 'False.';
echo '<br>';



echo '<br><hr><br>';



$num1 = 1;
$num2 = "1";

echo '1 == "1"' . '<br>';
echo ($num1 == $num2) ? 'true' : 'false';
echo '<br><br>';
echo '1 === "1"' . '<br>';
echo ($num1 === $num2) ? 'true' : 'false';  
echo '<br>';



echo '<br><hr><br>';



echo '1 <=> 1' . '<br>';
echo 1 <=> 1;
echo '<br><br>';
echo '1 <=> 2' . '<br>';
echo 1 <=> 2;
echo '<br><br>';
echo '2 <=> 1' . '<br>';
echo 2 <=> 1;
echo '<br>';

footerVolver('info.php#Operadores', 'Información');