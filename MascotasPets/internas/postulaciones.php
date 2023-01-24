<?php
    
	include "./header.php";
	include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	$miConexion= new class_mysqli();
	$miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

?>
    
<body>
<div class="contenedor">

	<main>
		<h2>Formulario de postulaciones</h2>
		<form method="post" action="guardarPostulacion.php">
			<div class="grupoinput">
				<label for="nombres">Nombres</label> 
				<br>
				<input id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
			</div>
			<div class="grupoinput">
				<label for="apellidos">Apellidos</label> 
				<br>
				<input id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos"required>
			</div>
			<div class="grupoinput">
				<label for="correo">Correo</label> 
				<br>
				<input id="correo"type="mail" name="correo" placeholder="Ingrese su correo"required>
			</div>
			<div class="grupoinput">
				<label for="password">Constraseña</label> 
				<br>
				<input id="password"type="password" name="password" placeholder="Ingrese su constraseña"required>
			</div>
			
			<div class="grupoinput">
				<label for="direccion">Dirección</label>
				<br> 
				<input id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion"required>
			</div>
			<div class="grupoinput">
				<label for="cedula">Cédula</label> 
				<br>
				<input id="cedula"type="text" name="cedula" placeholder="Ingrese su cedula"required>
			</div>
			<div class="grupoinput">
				<label for="mascotas">Escoge la mascota</label>
				<select name="mascotas" id="mascotas" required>
        			<?php
					$miConexion->consulta('SELECT mascota_id , nombre FROM mascotas');
					$miConexion->verMascotas();
        			?>
      			</select>
				
			</div>
			<button class ="button"type="submit"> Postular Adopción</button>
			
		</form>

	</main>
</div>
</body>
<?php
    
	include "./footer.php";

?>