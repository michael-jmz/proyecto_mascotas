
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
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$direccion=$_POST['direccion'];
$cedula=$_POST['cedula'];
$fecha=fechaActual();//enviamos fecha de creacion
$rol=2; //tipo staff (cliente)

$sentencia="INSERT INTO personal VALUES ('','$nombre','$apellido','$correo','$password','$direccion','$cedula','$fecha','$rol')";
$resSQL=$miConexion->consulta($sentencia);


if ($resSQL==""){
  echo "<script>Problemas de ejecucion</script>";
}else {
    //echo '<script> alert ("Postulación exitosa...");</script>';
    echo "<script> location.href='ingreso.php'</script>";



}
}

?>