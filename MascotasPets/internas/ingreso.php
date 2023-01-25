<?php include "./header.php"; ?>
    
    <body>
        
        <div id="contenedor">
            <div class="formulario ">
                <br><br><br>
                <h2 class="colorPlomo">Bienvenido 
                    <h3 class="colorPlomo">Iniciar sesión</h3><br>
                </h2>
                    <form id="loginform" method="post" action="">
                        <div class="grupoinputLogin colorPerla">
                            <label for="">Usuario:</label>
                            <input type="text" name="usuario" placeholder="Ej. james@dominio.com" required>
                        </div>
                        <div class="grupoinputLogin colorPerla">
                            <label for="">contraseña:</label>
                            <input type="password" placeholder="Escribe una contraseña" name="password" required>
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
                    <button  class="btnCrearCuenta" type="submit" title="Ingresar" name="Ingresar">Crear Cuenta</button>
                    </div>
            </div>
        </div>    
    </body>
    <?php
    
	require_once "./footer.php";


?>