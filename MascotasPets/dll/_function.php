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


        }

    }

    function editar_registro() {
        $conexion=mysqli_connect("localhost","root","","r_user");
        extract($_POST);
        $consulta="UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
        password ='$password' WHERE id = '$id' ";

        mysqli_query($conexion, $consulta);


        header('Location: ../views/user.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM user WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: ../views/user.php');

}

function acceso_user() {
    global $miConexion;

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        session_start();
        $_SESSION['correo']=$usuario;

    //$conexion=mysqli_connect("localhost","root","","r_user");
    
    $sentencia= "SELECT correo, password FROM personal WHERE correo='$usuario' AND password='$password'";
    $miConexion->consulta($sentencia);
    //$resultado=mysqli_query($conexion, $consulta);
    //$filas=mysqli_num_rows($resultado);
    $resSQL=$miConexion->consulta ($sentencia);
    if ($resSQL=""){
        echo "problemas de ejecucion";
        header('Location: ../internas/ingreso.php');
        session_destroy();
    }else{
        echo "Acceso Correcto";
        echo '<script> alert ("Postulación exitosa...");</script>';
        //echo "<script> location.href='../views/lista_user.php'</script>";
        header('Location: ../views/lista_users.php');

    }
}
}
?>