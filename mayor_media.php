<?php
// Almacenar en un array las notas de un alumno.
// Visualizar la media de las notas.

$alumno = [4,5,7];

function media($alumno){

    $media = array_sum($alumno)/count($alumno);
    return $media;
    
}

function mayor_media($alumno,$media){
   foreach ($alumno as $nota){
      if ($nota > $media){
         echo $nota;
         echo "<br>";
      }
   }
}

mayor_media($alumno,media($alumno));
echo "La media de las notas es: ";
echo media($alumno);
echo "</br>";

