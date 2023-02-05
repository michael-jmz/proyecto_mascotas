<?php

session_start();
error_reporting(0);
	$varsesion = $_SESSION['persona_id'];

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
    <p>¿Esta seguro de eliminar Postulación?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="../dll/_function.php" method="POST">
                <input type="hidden" name="accion" value="eliminar_postulacion">
                <input type="hidden" name="idPostulacion" value="<?php echo $_GET['idMascota']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="cards_postulaciones.php" class="btn btn-success">Cancelar</a>

                               
        </div>
    </div>



</body>
</html>