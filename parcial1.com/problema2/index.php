<?php
    require_once("controllers/usuario_controller.php");
    $obj = new usuario(1,"Audi","Audi Q8 2022","");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial_1</title>
</head>
<body>
    <div class="container-lg" align="center">
    <h1>Parcial 1 Problema 2 #4 Jean Guevara</h1>
        <br>
        <img src="https://imgs.search.brave.com/NG2WODxn5nEHFKefMdhd6aGIh4vvQARto3436CYG2j8/rs:fit:250:235:1/g:ce/aHR0cHM6Ly93d3cu/bG9nb2x5bnguY29t/L2ltYWdlcy9sb2dv/bHlueC9zX2Q4L2Q4/ZGVlMDRkOWY4OTVl/OTcxMTM0MzZhYjg1/NGQ0MDBmLmpwZWc" class="img-fluid" alt="...">
    </div>

        <div class="container-md">
            <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Tipo de Usuario</th>
                        <th scope="col">Tipo de Usuario</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach(usuario_controller::Mostrarautos() as $obj_autos) { ?> 
                <tr>
                    <th scope="row"><?php echo  $obj_autos->getId(); ?></th>
                    <td><?php echo  $obj_autos->getMarca(); ?></td>
                    <td><?php echo  $obj_autos->getModelo(); ?></td>
                    <td><?php echo  $obj_autos->getPrecio(); ?></td>
                    <td> <button type="button" class="btn btn-success">Admin</button> <button type="button" class="btn btn-danger">User <?php $obj->setPrecio("Usuario"); ?> </button></td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>