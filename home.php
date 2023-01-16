<?php 
include("conexion.php");
$con=Conectarse();

$sql="SELECT * FROM alumns";
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
    <title>PÁGINA ALUMNO</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
           <div class="col-md-3">
           <h3>INGRESAR DATOS</h3>
           <form action="insertar.php" method="POST">
            <!-- <input type="text" class="form-control mb-3" name="Cod_estudiante" placeholder="Cod de estudiante"/> -->
            <input type="text" class="form-control mb-3" name="Dni" placeholder="Dni"/>
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre"/>
            <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido"/>
           
            <input type="submit" class="btn btn-primary"/>
           </form>
           </div>
           <div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                   <tr>
                    <th>Cod estudiante</th>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th></th>
                    <th></th>
                   </tr> 
                </thead>
                <tbody>
                    <?php 
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php echo $row['Cod_estudiante'];?></th>
                            <th><?php echo $row['Dni']; ?></th>
                            <th><?php echo $row['Nombre']; ?></th>
                            <th><?php echo $row['Apellido']; ?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['Cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['Cod_estudiante']?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                <?php
                    }
                    ?>
                </tbody>
            </table>
           </div>
            
        </div>
        <div></div>
    </div>
</body>
</html>