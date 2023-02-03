<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['persona_id'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../internas/ingreso.php");
		die();//destruye la sesion
	}


include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

//funcion para obener la fecha actual
function fechaActual (){
    date_default_timeZone_set('America/Lima');
    return $fecha_creacion =date("Y-m-d H:i:s");
  }

    $idUser=$_SESSION['persona_id'];

    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //CAPTURA DATOS DE USUARIO PARA CREAR UN PERFIL
    //echo utf8_decode($usuario ['persona_id']);

    $idMascota= $_GET['idMascota'];
    
        echo $fecha=fechaActual();
        $descripcion="";
        $estado=3;
        
        $sentencia="INSERT INTO postulaciones VALUES ('','$fecha', '$descripcion','$estado',' $idMascota','$idUser')";
        $resSQL=$miConexion->consulta($sentencia);
      
      if ($resSQL==""){
          echo "problemas de ejecucion";
      }else{
          //echo '<script> alert ("Postulación exitosa...");</script>';
          echo "<script> location.href='cards_postulaciones.php'</script>";
      }
    
?>
