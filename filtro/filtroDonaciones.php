<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../styles.php' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Filtro de donaciones</title>
</head>
<body>

    <nav class=" justify-content-center navbar navbar-dark bg-primary">
        <h1 class="title text-center">Filtro de donaciones</h1>
    </nav>

    </div>

    <div class="row content">
        <div class="col-md-10 offset-md-1">
            <form action="./filtro.php" method="get">

                <p>Seleccione elemento a filtrar</p>

                <p><input type="radio" name="elemento" value="ropa"> Ropa</p>
                <p><input type="radio" name="elemento" value="zapatos"> Zapatos</p>
                <p><input type="radio" name="elemento" value="carrito"> Carrito</p>
                <p><input type="radio" name="elemento" value="doll"> Muñeca</p>

                <div class="btn-group col-md-10 offset-md-1" role="group">
                    <input type="submit" class="btn btn-primary btn-lg" value="Filtrar">
                    <a href="../index.php" class="btn btn-secondary btn-lg">Volver</a>
                </div>

            </form>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>