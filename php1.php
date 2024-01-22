<?php

//Dado un número o una variable alterar el contenido de esa variable por el opuesto.

$num = 5;
echo $num;
echo "<br>"; 
function inverso(&$num) {
    $num = -1 * $num;
}
inverso($num);
echo $num;
