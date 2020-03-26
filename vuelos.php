<?php
//este Arreglo tiene la informacion a guardar el archivo csv

$vuelos=array(
    array('id ', 'origen ', 'destino ', 'duracion'),
    array('1 ', 'New york ', 'London ', '415'),
    array('2', 'Shangai', 'Paris ', '760'),
    array('3', 'Istambul', 'Tokyo ', '700'),
    array('4 ', 'New york', 'Paris', '435'),
    array('5', 'Moscow ', 'Paris ', '245'),
    array('6 ', 'Lima  ', 'New york ', '455'),
); 

//nombre del archivo en el servidor 
$nombreaArch =  'vuelos2.csv ';
//abrimos el archivo en modo de escritura 
 $archivo = fopen($nombreArch, 'w' ) or die("No se puede abrir el archivo: $nombreArch");

//recorriendo el arreglo 2d
foreach ($vuelos as $vuelo) { 

    //escribiendo cada registro (vuelo) en archivo csv 
    $resp = fputcsv($archivo, $vuelo,  ', ',  '" ',  '" ');

    //si el resultado de intentar escribir es estrictimente igual al false 
   if($resp === false)  {die("Error al escribir en csv");}
}///fin -foreach

//cerramos el archivo 
fclose($archivo) or die("No se puede cerrar el archivo: $nombreArch");

echo(" <h1> Revisa el archivo: $nombreArch  </h1>");  

