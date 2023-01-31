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

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
?>
<div class="container is-fluid">
<div class="col-xs-12"> 
    <div class="row">
        <div class="col">
            <h1>Lista de usuarios</h1>
        </div>
        <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Cerrar sesión<i class="fa fa-power-off" aria-hidden="true"></i></a>
        </div>
    </div>
    <hr>
    <br>
    <div>
        <a class="btn btn-success " href="../index.php">Nuevo usuario <i class="fa fa-plus"></i></a>
	</div>
	<br>
    <br>
</form>
<?php
    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //$miConexion->consulta ("select *from personal");
	$miConexion->consulta("SELECT 	personal.persona_id 'ID', 
									personal.nombre 'Nombres', 
                                    personal.apellido 'Apellidos',
                                    personal.correo 'Correo', 
                                    personal.direccion 'Direccion',
                                    personal.cedula 'Cédula',
                                    personal.fecha_creacion 'Fecha Registro',
                                    rol.nombre 'Tipo Usuario' 
                                    FROM personal INNER JOIN rol ON personal.rol_id= rol.rol_id");
	$miConexion->verListaUsuarios();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>
