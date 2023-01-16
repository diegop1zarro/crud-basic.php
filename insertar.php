<?php 
include('conexion.php');
$con= Conectarse();
// $Cod_estudiante=$_POST['Cod_estudiante'];
$Dni=$_POST['Dni'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];

$sql="INSERT INTO alumns VALUES('Cod_estudiante','$Dni','$Nombre','$Apellido')";
$query= mysqli_query($con,$sql);

if($query){
    Header('Location: home.php');
}else{

};
?>