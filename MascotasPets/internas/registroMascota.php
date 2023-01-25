<?php
    
	require_once "./header.php";


?>
    
<body>
    <div id="contenedor">
        <div>
        <h2 class="colorPlomo">Añadir mascota</h2>

        <form  class="formAñadir" method="post" action="">
        <div class="grupoinputRegistrar colorPerla">
					<label for="">Nombre</label> 
					<input id="nombres"type="text" name="nombres" placeholder="Ingrese nombre" required>
		</div>
        <div class="grupoinputRegistrar colorPerla">
					<label for="">Raza</label> 
					<input id="raza"type="text" name="raza" placeholder="Ingrese raza" required>
		</div>
        <div class="grupoinputRegistrar colorPerla">
					<label for="">Edad</label> 
					<input id="edad"type="text" name="edad" placeholder="Ingrese edad" required>

                    <label for="mascotas">Meses o años</label>
                    <select name="mascotas" id="mascotas">
                    <option value="años">Años</option>
                    <option value="meses">Meses</option>
            </select>

		</div>
        
        <div class="inferior">
				<button class ="btnRegistrar"type="submit">Registrar</button>
				
	    </div>
             
    </form>
           
            
    </div> 

</div>    
</body>
<?php
    
	require_once "./footer.php";


?>