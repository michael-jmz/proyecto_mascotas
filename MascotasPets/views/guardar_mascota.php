
<?php

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

 $miConexion= new class_mysqli();
 $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
 

 //funcion para obener la fecha actual
  function fechaActual (){
    date_default_timeZone_set('America/Lima');
    return $fecha_creacion =date("Y-m-d H:i:s");
  }

//extract ($_POST);   //obtiene todo

if($_SERVER['REQUEST_METHOD']=='POST'){

$nombre=$_POST['nombres'];//debemos extraer una a uno por seguridad
$edad=$_POST['edad'];
$estado=$_POST['estado'];
$raza=$_POST['raza'];

$sentencia="INSERT INTO mascotas VALUES ('','$nombre','$edad','$estado','$raza')";
$resSQL=$miConexion->consulta($sentencia);

if ($resSQL==""){
    echo "problemas de ejecucion";
}else{
    //echo '<script> alert ("Postulación exitosa...");</script>';
    echo "<script> location.href='lista_mascotas.php'</script>";
}
}

?>