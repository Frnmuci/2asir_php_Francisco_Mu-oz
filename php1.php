<?php
// Almacenar en un array las notas de un alumno.
// Visualizar la media de las notas.

$alumno = [4,5,7];

function media($alumno){

    $media = array_sum($alumno)/count($alumno);
    return $media;
    
}
echo media($alumno);
echo "</br>";

