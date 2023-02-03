<?php 

include ("conexion.php");
include ("class_mysql.php");

$miConexion= new class_mysqli();
$miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;

            case 'editar_mascota':
                editar_mascota();
                break;

            case 'eliminar_mascota':
                eliminar_mascota();
                break;
            
            case 'editar_raza':
                editar_raza();
                break;

            case 'eliminar_raza':
                eliminar_raza();
                break;
            case 'eliminar_postulacion':
                eliminar_postulacion();
                break;


        }

    }

    function editar_registro() {
        global $miConexion;
        extract($_POST);
        $sentencia= "UPDATE personal SET nombre = '$nombre', 
                                         apellido = '$apellido', 
                                         correo = '$correo', 
                                         direccion = '$direccion', 
                                         cedula = '$cedula',
                                         rol_id = '$rol'
                                         WHERE persona_id = '$id'";
        $miConexion->consulta($sentencia);
        header('Location: ../views/lista_users.php');

}

function eliminar_registro() {
    global $miConexion;
    extract($_POST);
    $id= $_POST['id'];
    $sentencia= "DELETE FROM personal WHERE persona_id= $id";
    $miConexion->consulta($sentencia);
    header('Location: ../views/lista_users.php');

}

function acceso_user() {
    global $miConexion;

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        session_start();
    //$conexion=mysqli_connect("localhost","root","","r_user");
    
    $sentencia= "SELECT *  FROM personal WHERE correo='$usuario' AND password='$password'";
    $miConexion->consulta($sentencia);
    //$resultado=mysqli_query($conexion, $consulta);
    //$filas=mysqli_num_rows($resultado);
    $resultado=$miConexion->consulta ($sentencia);
    $resSQL=mysqli_fetch_array($resultado);
    
        //Rol ADMINISTRADOR
    if ($resSQL['rol_id']==1){ 
        $idUser=$resSQL['persona_id'];
        $_SESSION['persona_id']=$idUser;
         header('Location: ../views/lista_users.php');

       //ROL USARIARIO NORMAL Staff
    }else if ($resSQL['rol_id'] ==2) {
        $idUser=$resSQL['persona_id'];
        $_SESSION['persona_id']=$idUser;
        header("Location: ../views/cards_postulaciones.php");


    }else{ 
        echo "problemas de ejecucion";
        header('Location: ../internas/ingreso.php');
        session_destroy();

    }
}
}
//============================ CRUD MASCOTAS ==================================
 function editar_mascota(){
    global $miConexion;
        extract($_POST);
        $sentencia= "UPDATE mascotas SET nombre = '$nombre', 
                                         edad = '$edad', 
                                         estado_mascota = '$estado', 
                                         raza_id = '$raza'
                                         WHERE mascota_id = '$idMascota'";
        $miConexion->consulta($sentencia);
        header('Location: ../views/lista_mascotas.php');

 }
 function eliminar_mascota(){
    global $miConexion;
    extract($_POST);
    $id= $_POST['idMascota'];
    $sentencia= "DELETE FROM mascotas WHERE mascota_id= $id";
    $miConexion->consulta($sentencia);
    header('Location: ../views/lista_mascotas.php');

 }

 //============================ CRUD RAZAS ==================================

 function editar_raza(){
    global $miConexion;
        extract($_POST);
        $sentencia= "UPDATE razas SET tipo = '$nombre'
                                         WHERE raza_id = '$idRaza'";
        $miConexion->consulta($sentencia);
        header('Location: ../views/lista_razas.php');

 }
 function eliminar_raza(){
    global $miConexion;
    extract($_POST);
    $id= $_POST['idRaza'];
    $sentencia= "DELETE FROM razas WHERE raza_id= $id";
    $miConexion->consulta($sentencia);
    header('Location: ../views/lista_razas.php');
 }

 //============================ CRUD POSTULACIONES ==================================
 

 function eliminar_postulacion(){
    global $miConexion;
    extract($_POST);
    $id= $_POST['idPostulacion'];
    $sentencia= "DELETE FROM postulaciones WHERE postulaciones_id= $id";
    $miConexion->consulta($sentencia);
    header('Location: ../views/cards_postulaciones.php');

 }

?>