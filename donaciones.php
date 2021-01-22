<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='styles.php' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Visualización de las donaciones</title>
</head>
<body>

    <nav class="justify-content-center navbar navbar-dark bg-primary">
        <h1 class="title text-center">Visualización de las donaciones</h1>
    </nav>


    <div class="row content">
        <div class="col-md-10 offset-md-1">
        <table class="table">
    <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Ropa</th>
            <th>Zapatos</th>
            <th>Carrito</th>
            <th>Muñeca</th>
    </tr> 

    <?php
            include("config.php");

            $sql = "SELECT * FROM registros";
            $resultado = mysqli_query($db, $sql);
        

            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "
                    <tr>
                        <td>$row[name]</th>
                        <td>$row[phone]</th>
                        <td>$row[address]</th>
                        <td>$row[ropa]</th>
                        <td>$row[zapatos]</th>
                        <td>$row[carrito]</th>
                        <td>$row[doll]</th>
                    </tr>
                
                " ;
            }
        ?>
    </table>


        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <a href="../index.php" class="back btn btn-secondary btn-lg btn-block">Volver al menu principal</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>