<?php
    
	require_once "./header.php";


?>
    
<body>
    <div id="contenedor">
        <h2>Añadir mascota</h2>

        <form method="post" action="">
        <div class="grupoinput">
            <label for="nombres">Nombres</label> 
            <input id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
        </div>
        <div class="grupoinput">
            <label for="raza">Raza</label> 
            <input id="raza"type="text" name="raza" placeholder="Ingrese sus raza"required>
        </div>
        
        <div class="grupoinput">
            <label for="edad">Edad </label> 
            <input id="edad"type="text" name="edad" placeholder="Ingrese su edad"required>
            
            <label for="mascotas">Meses o años</label>
            <select name="mascotas" id="mascotas">
                <option value="años">Años</option>
                <option value="meses">Meses</option>
            </select>
        </div>
        

        <button class ="button"type="submit">Registrar</button>        
    </form>
           
            
    </div> 

    
</body>
<?php
    
	require_once "./footer.php";


?>