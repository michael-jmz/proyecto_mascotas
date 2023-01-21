<?php
    
	require_once "./header.php";


?>
    
    <body>
        <div id="contenedor">
            <div class="formulario">
                <h2>Bienvenido 
                    <h3>Iniciar sesión</h3>
                </h2>
                    <form id="loginform" method="post" action="">
                        <div class="grupoinput">
                            <label for="">Usuario</label>
                            <br>
                            <input type="text" name="usuario" placeholder="Usuario" required>
                        </div>
                        <div class="grupoinput">
                            <label for="">contraseña</label>
                            <br>
                            <input type="password" placeholder="Contraseña" name="password" required>
                        </div>
                        <div class="grupoinput">
                        <input type="checkbox" id="sesion" name="sesion" value="">
                        <label for="sesion">Mantener la sesión iniciada</label><br>
                        </div>
                        <button type="submit" title="Ingresar" name="Ingresar">Ingresar</button>
                    </form>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                    </div>
                    <div class="inferior">
                        <a href="#">Volver</a>
                    </div>
            </div>
        </div>    
    </body>
    <?php
    
	require_once "./footer.php";


?>