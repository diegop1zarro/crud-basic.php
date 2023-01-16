<?php 
    $host = "localhost";
     $puerto = "3306";
    $usuario = "root";
    $contrasena = "";
    $baseDeDatos ="primer-proyect";
    $tabla = "alumns";
    function Conectarse()
    {
       global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;

       if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
       { 
         //  echo "Error conectando a la base de datos.<br>"; 
          exit(); 
          }
       else
       {
         //  echo "Listo, estamos conectados.<br>";
       }
       if (!mysqli_select_db($link, $baseDeDatos)) 
       { 
         //  echo "Error seleccionando la base de datos.<br>"; 
          exit(); 
       }
       else
       {
         //  echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
       }
    return $link; 
    } 

   $link = Conectarse(); 
   // mysql_close($link);
?>
