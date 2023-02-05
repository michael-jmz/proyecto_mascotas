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
include("../includes/menu_interno.php");
include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    $idUser=$_SESSION['persona_id'];

    $id_postulacion=$_GET['id'];

    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //CAPTURA DATOS DE USUARIO PARA CREAR UN PERFIL

    $resultado=$miConexion->consulta("SELECT persona_id, nombre FROM personal WHERE persona_id='$idUser'");
    $row= $resultado->fetch_assoc();

?>
<div class="container is-fluid">
<div class="col-xs-12"> 
    <div class="row">
        <h2>Bievenid@ <?php echo utf8_decode($row ['nombre']); ?></h2>
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
    //$miConexion->consulta ("select *from personal");
	$resultado=$miConexion->consulta("SELECT 	
                                    postulaciones.postulaciones_id 'ID',
                                    personal.nombre 'Nombre',
                                    mascotas.nombre 'Mascota',
                                    postulaciones.fecha_postulacion 'Fecha Postulacion',
                                    estados.estado 'Estado'
                                    FROM personal INNER JOIN postulaciones ON personal.persona_id= postulaciones.persona_id 
                                    INNER JOIN mascotas ON postulaciones.mascota_id= mascotas.mascota_id 
                                    INNER JOIN estados ON postulaciones.estado_id = estados.estado_id AND personal.persona_id='$id_postulacion'");
    if($resultado>0){
        $miConexion->verListaPostulacion();
    }else {
        echo "<div>No hay registros</div>";
    }
    
    //SELECT personal.nombre,personal.apellido, mascotas.nombre,estados.estado FROM personal INNER JOIN postulaciones ON personal.persona_id= postulaciones.persona_id INNER JOIN mascotas ON postulaciones.mascota_id= mascotas.mascota_id INNER JOIN estados ON postulaciones.estado_id = estados.estado_id;

?>
</html>
