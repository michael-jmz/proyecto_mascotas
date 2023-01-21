<?php
    
	require_once "./header.php";


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
				<label for="direccion">Dirección</label>
				<br> 
				<input id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion"required>
			</div>
            <div class="grupoinput">
				<label for="correo">Correo</label> 
				<br>
				<input id="correo"type="mail" name="correo" placeholder="Ingrese su correo"required>
			</div>
			<div class="grupoinput">
				<label for="cedula">Cédula</label> 
				<br>
				<input id="cedula"type="text" name="cedula" placeholder="Ingrese su cedula"required>
			</div>
			<div class="grupoinput">
				<label for="mascotas">Escoge la mascota</label>
				<select name="mascotas" id="mascotas">
					<option value="volvo">Jack</option>
					<option value="saab">Saab</option>
					<option value="mercedes">Max</option>
					<option value="audi">Bluu</option>
				</select>
				
			</div>
			<button class ="button"type="submit"> Postular Adopción</button>
			
		</form>

	</main>
</div>
</body>
<?php
    
	require_once "./footer.php";


?>