<?php

//Dado un número o una variable alterar el contenido de esa variable por el opuesto.

$num = $_POST["num1"];
echo "Usted ha introducido: ";
echo $num;
echo "<br>"; 
function inverso(&$num) {
    $num = -1 * $num;
}
inverso($num);
echo "El inverso del número es: ";
echo $num;
