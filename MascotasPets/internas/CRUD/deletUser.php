<?php

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

 $miConexion= new class_mysqli();
 $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

//extract ($_POST);   //obtiene todo
//mediante url se extrae datos por metodo GET
$idUser =$_GET['idUser'];

$sql ="DELETE FROM personal WHERE id=$idUser";
//$sql = "update personal set nombres= 'Rousmary' , apellidos='Pardo' where id=2";
$resSQL=$miConexion->consulta ($sql);

if ($resSQL==""){
    echo "problemas de ejecucion";
}else{
    echo "Registro eliminado";
    echo '<script> alert ("Registro eliminado");</script>';
    echo "<script> location.href='adopcion.php'</script>";
}

?>