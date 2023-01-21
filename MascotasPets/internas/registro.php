<?php
    
	require_once "./header.php";


?>
    
    
    <body>
        <div id="contenedor">
            <h2>Bienvenido 
                <h3>Crear una cuenta</h3>
            </h2>

            <form method="post" action="login.php">
			<div class="grupoinput">
				<label for="nombres">Nombres</label> 
				<input id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
			</div>
			<div class="grupoinput">
				<label for="apellidos">Apellidos</label> 
				<input id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos"required>
			</div>
			
			<div class="grupoinput">
				<label for="direccion">Dirección</label> 
				<input id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion"required>
			</div>
            <div class="grupoinput">
				<label for="correo">Correo</label> 
				<input id="correo"type="mail" name="correo" placeholder="Ingrese su correo"required>
			</div>
			<div class="grupoinput">
				<label for="cedula">Cédula</label> 
				<input id="cedula"type="number" name="cedula" placeholder="Ingrese su cedula"required>
			</div>
            <div class="grupoinput">
				<label for="telefono">Teléfono</label> 
				<input id="telefono"type="number" name="telefono" placeholder="Ingrese su cedula"required>
			</div>
            <div class="grupoinput">
                <label for="password">Contraseña</label>
				<input type="password" placeholder="Contraseña" name="password" required>
            </div>
            <div class="grupoinput">
                <label for="newPassword">Repita la contraseña</label>
				<input type="newPassword" placeholder="Repita la contraseña" name="newpassword" required>
            </div>
			
			<button class ="button"type="submit">Registrarme</button>
			<button class ="button"type="submit">Ya tengo cuenta</button>
			
		</form>
               
                
        </div>    
    </body>
	<?php
    
	require_once "./footer.php";


?>