<?php
$conexion= new mysqli("127.0.0.1","root","","peetsbasedatos");
if (!$conexion){

    echo "hay un error de conexion a la bd";
}else {

    echo "si se coencto";
}
?>