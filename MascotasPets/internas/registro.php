<?php
    
	require_once "./header.php";


?>
    
    
    <body>

        <div id="contenedor">
			<div>
            <h2 class="colorPlomo">Crear una cuenta</h2>

            <form  class="formRegistro" method="post" action="guardar_usuario.php">

				<div class="grupoinputRegistrar colorPerla">
					<label for="">Nombres</label> 
					<input id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
				</div>

				<div class="grupoinputRegistrar colorPerla">
					<label for="apellidos">Apellidos</label> 
					<input id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos"required>
				</div>
				<div class="grupoinputRegistrar colorPerla">
					<label for="correo">Correo</label> 
					<input id="correo"type="mail" name="correo" placeholder="Ingrese su correo"required>
				</div>
				<div class="grupoinputRegistrar colorPerla">
					<label for="password">Constraseña</label> 
					<input id="password"type="password" name="password" placeholder="Ingrese su constraseña"required>
				</div>
				
				<div class="grupoinputRegistrar colorPerla">
					<label for="direccion">Dirección</label> 
					<input id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion"required>
				</div>
				<div class="grupoinputRegistrar colorPerla">
					<label for="cedula">Cédula</label> 
					<input id="cedula"type="number" name="cedula" placeholder="Ingrese su cedula"required>
				</div>
			
			
			<div class="inferior">
				<button class ="btnRegistrar"type="submit" value="Guardar">Registrarme</button>
				<button class ="btnCrearCuenta"type="submit">Ya tengo cuenta</button>
			</div>
			
		</form>     
        </div> 
	</div>   
    </body>
	<?php
    
	require_once "./footer.php";


?>