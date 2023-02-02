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

    $id= $_GET['id'];
    $sentencia= "SELECT * FROM personal WHERE persona_id= $id";
    $resultado=$miConexion->consulta($sentencia);
    $usuario = mysqli_fetch_assoc($resultado);

    ?>


<form  action="../dll/_function.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>"required>
                            </div>

                            <div class="form-group">
                                <label for="apellido" class="form-label">Apellidos*</label>
                                <input type="text"  id="apellido" name="apellido" class="form-control" value="<?php echo $usuario['apellido'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="" value="<?php echo $usuario['correo'];?>">
                            </div>
                            <div class="form-group">
                                  <label for="direccion" class="form-label">Dirección *</label>
                                <input type="text"  id="direccion" name="direccion" class="form-control" value="<?php echo $usuario['direccion'];?>" required>
                                
                            </div>
                            <div class="form-group">
				                <label for="rol">Tipo de Rol</label>
				                <select name="rol" id="rol" required>
        			                <?php
					                $miConexion->consulta('SELECT rol_id , nombre FROM rol');
					                $miConexion->verRoles();
        			                ?>
      			                </select>
				
			                </div>
                            <br>
                            <div class="form-group">
                                <label for="cedula">Cédula:</label><br>
                                <input type="number" name="cedula" id="cedula" class="form-control" value="<?php echo $usuario['cedula'];?>" required>
                            
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="lista_users.php" class="btn btn-danger">Cancelar</a>
                               
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

