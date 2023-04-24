<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-mod.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Estilos Bootstrap 5 para DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap5.css">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center text-light">Inventario de Productos</h1>
        <h2 class="text-center text-light">Troquelados Diversos C.A</h2>
    </header>
    <div style="height:50px"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="inventario" class="table table-hover table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 3.33%;">Código Producto</th>
                                <th style="width: 65%;">Descripción</th>
                                <th style="width: 3.33%;">Código Almacén</th>
                                <th style="width: 25%;">Almacén</th>
                                <th style="width: 3.33%;">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once "tbody.php"; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- JS de DataTables -->
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <!-- llamo al mi funcion main.js -->
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>