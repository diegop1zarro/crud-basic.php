<?php 
include('conexion.php');
$con= Conectarse();
$Cod_estudiante=$_GET['id'];


$sql="DELETE FROM alumns WHERE Cod_estudiante='$Cod_estudiante'";
$query= mysqli_query($con,$sql);

if($query){
    Header('Location: home.php');
}else{

};
?>