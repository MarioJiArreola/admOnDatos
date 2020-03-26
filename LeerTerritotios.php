 <?php 
$nombreArchivo = "territory_names.csv;

$archivo = fopen($nombreArchivo, "r")  or die("No se puede abrir el archivo: $nombreArchivo");; 

$datos = array();

print( "<table>");
  
while(( $datos = fgetcsv("$archivo, 0, ', ', '" ',' " ')) !== false) {

print(" <tr>");

  foreach($datos as $campo) {

      print(" <td>");

      print("$campo");

       print(" </td>");
   }

   print(" </td>");
      
  }
  
print(" </table>");  