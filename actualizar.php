<?php 
include("conexion.php");
$con=Conectarse();
$id= $_GET['id'];

$sql="SELECT * FROM alumns WHERE Cod_estudiante='$id'";
$query=mysqli_query($con,$sql);
$row= mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Actualizar</title>
</head>
<body>
   <div class="container mt-5">
       <form action="update.php" method="POST">
                   <input type="hidden" class="form-control mb-3" name="Cod_estudiante" placeholder="Cod de estudiante" value="<?php echo $row['Cod_estudiante']?>"/>
                   <input type="text" class="form-control mb-3" name="Dni" placeholder="Dni" value="<?php echo $row['Dni']?>"/>
                   <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']?>"/>
                   <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" value="<?php echo $row['Apellido']?>"/>
                  
                   <input type="submit" value="Actualizar" class="btn btn-primary"/>
                  </form>
   </div> 
</body>
</html>