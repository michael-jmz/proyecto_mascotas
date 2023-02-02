<?php


session_start();
error_reporting(0);
	$varsesion = $_SESSION['persona_id'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../internas/ingreso.php");
		die();
	}
  

?>


<!DOCTYPE html>
<body id="page-top">
    <?php
    
    include ("../includes/header_interno.php");
    include ("../includes/menu_interno.php") ;

    include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    
    $miConexion= new class_mysqli();
    $miConexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $idRaza= $_GET['idRaza'];
    $sentencia= "SELECT * FROM razas WHERE raza_id= $idRaza";
    $resultado=$miConexion->consulta($sentencia);
    $razas = mysqli_fetch_assoc($resultado);

    ?>


<form  action="../dll/_function.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Editar Mascota</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $razas['tipo'];?>"required>
                            </div>
                          
                            <div class="form-group">
                                <input type="hidden" name="accion" value="editar_raza">
                                <input type="hidden" name="idRaza" value="<?php echo $idRaza;?>">
                            </div>
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="lista_razas.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

</body>
</html>

