<?php

include ("config.php");
$con = new mysqli (DBHOST, DBUSER, DBPASS, DBNAME);
if (!$con){
    echo "Error de conexión";
}else{
    echo "conexion exitosa";
}

?>