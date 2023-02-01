
<?php

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

 $miConexion= new class_mysqli();
 $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
 
if($_SERVER['REQUEST_METHOD']=='POST'){

  $nombre=$_POST['nombres'];//debemos extraer una a uno por seguridad
  $sentencia="INSERT INTO razas VALUES ('','$nombre')";
  $resSQL=$miConexion->consulta($sentencia);

if ($resSQL==""){
    echo "problemas de ejecucion";
}else{
    //echo '<script> alert ("Postulación exitosa...");</script>';
    echo "<script> location.href='lista_razas.php'</script>";
}
}

?>