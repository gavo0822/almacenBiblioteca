<?php include('template/cabecera.php'); ?>

<div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-3">BIENVENIDO <?php echo $nombreUsuario; ?></h1>
        <p class="lead">Administracion de la biblioteca</p>
        <hr class="my-2">
        
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar libros</a>
        </p>
    </div>    
</div>  

<?php include('template/pie.php'); ?>
