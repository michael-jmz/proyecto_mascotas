<?php
    
	include ("../includes/header_interno.php");
	include ("../includes/menu_interno.php") ;
	include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	$miConexion= new class_mysqli();
	$miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

?>
    

	<body id="page-top">
		<form method="post" action="guardar_usuario.php">
			<div id="login" >
				<div class="container">
					<div id="login-row" class="row justify-content-center align-items-center">
						<div id="login-column" class="col-md-6">
							<div id="login-box" class="col-md-12">
								<h3 class="text-center">Registro de nuevo usuario</h3>

									<div class="form-group">
										<label class="form-label" for="nombres">Nombres</label> 
										<br>
										<input class="form-control" id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
									</div>
									<div class="form-group">
										<label class="form-label" for="apellidos">Apellidos</label> 
										<br>
										<input class="form-control" id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos"required>
									</div>
									<div class="form-group">
										<label class="form-label" for="correo">Correo</label> 
										<br>
										<input class="form-control" id="correo"type="mail" name="correo" placeholder="Ingrese su correo"required>
									</div>
									<div class="form-group">
										<label class="form-label" for="password">Constraseña</label> 
										<br>
										<input class="form-control" id="password"type="password" name="password" placeholder="Ingrese su constraseña"required>
									</div>
									
									<div class="form-group">
										<label class="form-label" for="direccion">Dirección</label>
										<br> 
										<input class="form-control" id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion"required>
									</div>
									<div class="form-group">
										<label class="form-label" for="cedula">Cédula</label> 
										<br>
										<input class="form-control" id="cedula"type="text" name="cedula" placeholder="Ingrese su cedula"required>
									</div>

									<br>
									

									<div class="mb-3">
                                    
                               			<input type="submit" value="Guardar"class="btn btn-success" name="registrar">
                               			<a href="lista_users.php" class="btn btn-danger">Cancelar</a>
                            		</div>
                        	</div>
                		</div>
            		</div>
        		</div>
    		</div>							
		</form>
		
</body>
