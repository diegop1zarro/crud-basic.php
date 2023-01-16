<?php 
include('conexion.php');
$con= Conectarse();
$Cod_estudiante=$_POST['Cod_estudiante'];
$Dni=$_POST['Dni'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];

$sql="UPDATE alumns SET Dni='$Dni',Nombre='$Nombre',Apellido='$Apellido' WHERE Cod_estudiante='$Cod_estudiante'";
$query= mysqli_query($con,$sql);

if($query){
    Header('Location: home.php');
}else{

};
?>
