<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../styles.php' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Donación registrada</title>
</head>
<body>

    <h2 class="text-center content">Se ha registrado su donación</h2>


    <?php
        include("../config.php");


        if(isset($_POST['ropa'])) $b_ropa = $_POST['ropa'];
        else $b_ropa = 0;

        if(isset($_POST['zapatos'])) $b_zapatos = $_POST['zapatos'];
        else $b_zapatos = 0;

        if(isset($_POST['carrito'])) $b_carrito = $_POST['carrito'];
        else $b_carrito = 0;

        if(isset($_POST['doll'])) $b_doll = $_POST['doll'];
        else $b_doll = 0;
        

        $sql = "INSERT INTO registros (name,phone,address,ropa,zapatos,carrito,doll) VALUES ('$_POST[name]','$_POST[phone]','$_POST[address]','$b_ropa','$b_zapatos','$b_carrito','$b_doll')";
        
        $resultado = mysqli_query($db, $sql);

        mysqli_close( $db );
    ?>


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