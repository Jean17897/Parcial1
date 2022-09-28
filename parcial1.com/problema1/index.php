<?php
    require_once("controllers/autos_controller.php");
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial_1</title>
</head>
<body >
    <div class="container-lg" align="center">
    <h1>Parcial 1 Problema #4 Jean Guevara</h1>
        <br>
        <img src="imagenes/logo.jpg" class="img-fluid" alt="...">
    </div>

    <div class="container-md">
        
        <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Días</th>
                    <th scope="col">Precio a Pagar</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Ver</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach(autos_controller::Mostrarautos() as $obj_autos) { ?> 
                <tr>
                    <th scope="row"><?php echo  $obj_autos->getId(); ?></th>
                    <td><?php echo  $obj_autos->getMarca(); ?></td>
                    <td><?php echo  $obj_autos->getModelo(); ?></td>
                    <td><?php echo  "$".number_format($obj_autos->getPrecio()); ?></td>
                    <td><?php echo  $obj_autos->getDias(); ?></td>
                    <td><?php echo  "$".number_format($obj_autos->getTotal_precio()); ?></td>
                    <td><img src="imagenes/img<?php echo  $obj_autos->getId(); ?>.jpg" class="img-fluid" alt="..."></td>
                    <td><a href="mostrar.php?id=<?php echo  $obj_autos->getId(); ?>&marca=<?php echo  $obj_autos->getMarca(); ?>&modelo= <?php echo  $obj_autos->getModelo(); ?>&dias= <?php echo  $obj_autos->getDias(); ?>&total= <?php echo  "".number_format($obj_autos->getTotal_precio()); ?>"><button type="button" class="btn btn-success">Ver</button> </a></td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>