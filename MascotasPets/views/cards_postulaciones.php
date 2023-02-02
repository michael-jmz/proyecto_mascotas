<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['persona_id'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../internas/ingreso.php");
		die();//destruye la sesion
	}
?>
<!DOCTYPE html>
<?php 
include ("../includes/header_interno.php");
include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    $idUser=$_SESSION['persona_id'];

    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //CAPTURA DATOS DE USUARIO PARA CREAR UN PERFIL

    $resultado=$miConexion->consulta("SELECT persona_id, nombre FROM personal WHERE persona_id='$idUser'");
    $usuario= $resultado->fetch_assoc();

?>
<div class="container is-fluid">
    <div class="col-xs-12"> 
        <div class="row">
            <h2>Bievenid@ <?php echo utf8_decode($usuario ['nombre']); ?></h2>
            <div class="col">
                <h1><i class="fa-solid fa-user" title="Usuario"></i> Lista de Postulaciones </h1>
            </div>
            <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Cerrar sesión<i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
    </div>
     <hr>
    <br>
</form>
<?php
	$miConexion->consulta("SELECT 	
                                    postulaciones.postulaciones_id,
                                    mascotas.nombre 'Mascota',
                                    mascotas.descripcion 'Descripcion',
                                    mascotas.imagen,
                                    postulaciones.fecha_postulacion 'Fecha Postulacion',
                                    estados.estado 'Estado'
                                    FROM personal INNER JOIN postulaciones ON personal.persona_id= postulaciones.persona_id 
                                    INNER JOIN mascotas ON postulaciones.mascota_id= mascotas.mascota_id 
                                    INNER JOIN estados ON postulaciones.estado_id = estados.estado_id AND personal.persona_id='$idUser'");
    
	$miConexion->verCardsPostulaciones();
    //SELECT personal.nombre,personal.apellido, mascotas.nombre,estados.estado FROM personal INNER JOIN postulaciones ON personal.persona_id= postulaciones.persona_id INNER JOIN mascotas ON postulaciones.mascota_id= mascotas.mascota_id INNER JOIN estados ON postulaciones.estado_id = estados.estado_id;

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>
