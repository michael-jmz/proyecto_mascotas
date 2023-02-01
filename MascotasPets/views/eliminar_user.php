<?php

session_start();
error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../includes/login.php");
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
    <p>¿Esta seguro de eliminar registro?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="../dll/_functions.php" method="POST">
                <input type="hidden" name="accion" value="eliminar_registro">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="lista_users.php" class="btn btn-success">Cancelar</a>

                               
        </div>
    </div>



</body>
</html>