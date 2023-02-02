<?php include "./header.php"; ?>
    
    <body>
        
        <div id="contenedor">
            <div class="formulario ">
                <br><br><br>
                <h2 class="colorPlomo">Iniciar sesión</h2><br>
                
                    <form id="loginform" method="post" action="../dll/_function.php">
                        <div class="grupoinputLogin colorPerla">
                            <label for="usuario">Usuario:</label>
                            <input class="form-control" id="usuario" type="text" name="usuario" placeholder="Ej. james@dominio.com" required>
                        </div>
                        <div class="grupoinputLogin colorPerla">
                            <label for="password">Contraseña:</label>
                            <input class="form-control" id="password" type="password"  name="password" placeholder="Escribe una contraseña"  required>
                            <input type="hidden" name="accion" value="acceso_user">
                        </div>
                        <div class="grupoinput">
                        <input type="checkbox" id="sesion" name="sesion" value="">
                        <label class="colorPerla" for="sesion">Mantener la sesión iniciada</label><br><br>
                        </div>
                        <div class="inferior">
                            <button  class="btnLogin" type="submit" title="Ingresar" name="Ingresar">Iniciar sesión</button>
                        </div>
                    </form>
                    <br>
                    <div class="inferior">
                        <a class="btnRecuperarPassword" href="#">¿Perdiste tu contraseña?</a>        
                    </div><br>
                
                    <hr class="separador"></hr><br>
                    <div class="inferior"> 
                    <a href="registro.php"><button class="btnCrearCuenta" title="Ingresar" name="Ingresar"> Crear una cuenta </button></a>
                    </div>
            </div>
        </div>    
    </body>
    <?php
    
	require_once "./footer.php";


?>