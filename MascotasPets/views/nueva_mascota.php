<?php
    
	include ("../includes/header_interno.php");
	include ("../includes/menu_interno.php") ;
	include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	$miConexion= new class_mysqli();
	$miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

?>
	<body id="page-top">
		<form method="post" action="guardar_mascota.php">
			<div id="login" >
				<div class="container">
					<div id="login-row" class="row justify-content-center align-items-center">
						<div id="login-column" class="col-md-6">
							<div id="login-box" class="col-md-12">
								<h3 class="text-center">Registro de nueva mascota</h3>

									<div class="form-group">
										<label class="form-label" for="nombres">Nombre</label> 
										<br>
										<input class="form-control" id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
									</div>
									<div class="form-group">
										<label class="form-label" for="edad">Edad</label> 
										<br>
										<input class="form-control" id="edad"type="text" name="edad" placeholder="Ingrese su edad "required>
									</div>
									<div class="form-group">
										<label class="form-label" for="imagen">Imagen</label> 
										<br>
										<input class="form-control" id="imagen"type="file" name="selImg" required onClick ="actualizarImg">
									</div>

                                    <br>
                                    <p>Estado de mascota (Habilitada/Deshabilitada)</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estado" id="habilitado" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">Habilitada</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estado" id="deshabilitado" value="0">
                                        <label class="form-check-label" for="flexRadioDefault2">Deshabilitada</label>
                                    </div>
                                    <br>
									<div class="form-group">
				                       <label class="form-label" for="raza">Razas</label>
				                        <select name="raza" id="raza" required>
        			                    <?php
					                        $miConexion->consulta('SELECT raza_id , tipo FROM razas');
					                        $miConexion->verRazas();
        			                    ?>
      			                        </select>
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
		<img src="../imgs/<?php echo $fila['imagen']; ?>" onerror=this.src="../imgs/noimage.png" width="50" heigth="70">

		
</body>
<script src="../scripts/actualizarImg.js"></script>

