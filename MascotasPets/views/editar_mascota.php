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

    require_once ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    require_once ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    
    $miConexion= new class_mysqli();
    $miConexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $idMascota= $_GET['idMascota'];
    $sentencia= "SELECT * FROM mascotas WHERE mascota_id= $idMascota";
    $resultado=$miConexion->consulta($sentencia);
    $mascotas = mysqli_fetch_assoc($resultado);

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
                                <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $mascotas['nombre'];?>"required>
                            </div>

                            <div class="form-group">
                                <label for="edad" class="form-label">Edad*</label>
                                <input type="text"  id="edad" name="edad" class="form-control" value="<?php echo $mascotas['edad'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="esatdo">Estado de mascota:</label><br>
                                <input type="number" name="estado" id="esatdo" class="form-control" placeholder="" value="<?php echo $mascotas['estado_mascota'];?>">
                            </div>
                            <div class="form-group">
				                <label for="raza">Tipo de Rol</label>
				                <select name="raza" id="raza" required>
        			                <?php
					                $miConexion->consulta('SELECT raza_id , tipo FROM razas');
					                $miConexion->verRazas();
        			                ?>
      			                </select>
				
			                </div>
                            <br>
                            <div class="form-group">
                                <input type="hidden" name="accion" value="editar_mascota">
                                <input type="hidden" name="idMascota" value="<?php echo $idMascota;?>">
                            </div>
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="lista_mascotas.php" class="btn btn-danger">Cancelar</a>
                               
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

