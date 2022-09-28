<?php 
    $id=$_GET["id"];
    $marca=$_GET["marca"];
    $modelo=$_GET["modelo"];
    $dias=$_GET["dias"];
    $precio=$_GET["total"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Mostrar</title>
</head>
<body style="background-color:#49BC04;" background="imagenes/auto<?php echo $id ?>.jpg">
    <div class="container-lg">
        <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Días</th>
                    <th scope="col">Precio Total a Pagar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo "".$id ?> </td>
                    <td><?php echo "".$marca ?> </td>
                    <td><?php echo "".$modelo ?> </td>
                    <td><?php echo "".$dias ?> </td>
                    <td><?php echo "$".$precio ?> </td>
                </tr>
            </tbody>
        </table>
        <img src="imagenes/auto<?php echo $id ?>.jpg" class="img-fluid" alt="...">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>