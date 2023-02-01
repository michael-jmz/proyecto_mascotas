<?php

session_start();
error_reporting(0);
	$varsesion = $_SESSION['correo'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../internas/ingreso.php");
		die();
	}

?>
<!DOCTYPE html>
<?php 
include ("../includes/header_interno.php");
include ("../includes/menu_interno.php") ;
?>
<body>
    
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3">
    <div class="alert alert-danger text-center">
    <p>¿Esta seguro de eliminar Raza?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="../dll/_function.php" method="POST">
                <input type="hidden" name="accion" value="eliminar_raza">
                <input type="hidden" name="idRaza" value="<?php echo $_GET['idRaza']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="lista_razas.php" class="btn btn-success">Cancelar</a>

                               
        </div>
    </div>



</body>
</html>