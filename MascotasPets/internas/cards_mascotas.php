<?php
include "./header.php";
include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //CAPTURA DATOS DE USUARIO PARA CREAR UN PERFIL
?>
<!DOCTYPE html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</header>
<body class="principal">
    <br><br>
    <div class="">
    
<?php
	$miConexion->consulta("SELECT 	
                                    mascotas.mascota_id,
                                    mascotas.nombre,
                                    mascotas.descripcion,
                                    mascotas.imagen,
                                    mascotas.edad,
                                    mascotas.estado_mascota,
                                    razas.raza_id,
                                    razas.tipo
                                    FROM mascotas INNER JOIN razas ON mascotas.raza_id=razas.raza_id
                                    AND mascotas.estado_mascota=1");
    
	$miConexion->verCardsMascotas();
    //SELECT personal.nombre,personal.apellido, mascotas.nombre,estados.estado FROM personal INNER JOIN postulaciones ON personal.persona_id= postulaciones.persona_id INNER JOIN mascotas ON postulaciones.mascota_id= mascotas.mascota_id INNER JOIN estados ON postulaciones.estado_id = estados.estado_id;

?>   
</div>  
</body>


</html>
<?php include "./footer.php";?>