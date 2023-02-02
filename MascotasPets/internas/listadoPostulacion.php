<?php

    include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

	//SELECT personal.nombre, personal.apellido, mascotas.nombre, mascotas.raza FROM personal INNER JOIN mascotas ON personal.persona_id= mascotas.mascota_id
//INNER JOIN mascota_personal ON mascota_personal.mascota_peronsal_id= personal.persona_id
//GROUP BY personal.nombre

// consulta sql tabla intermedia

//SELECT personal.persona_id, personal.nombre, personal.apellido, mascotas.nombre, mascotas.raza FROM personal INNER JOIN mascota_personal ON personal.persona_id= mascota_personal.persona_id
//INNER JOIN mascotas ON mascota_personal.mascota_id= mascotas.mascota_id

    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //$miConexion->consulta ("select *from personal");
	$miConexion->consulta("SELECT 	personal.persona_id 'ID', 
									personal.nombre 'Nombres', 
                                    personal.apellido 'Apellidos',
                                    personal.cedula 'Cédula', 
                                    mascotas.nombre 'Mascota', 
                                    mascotas.raza 'Raza'
                                    FROM personal INNER JOIN mascota_personal ON personal.persona_id= mascota_personal.persona_id
									INNER JOIN mascotas ON mascota_personal.mascota_id= mascotas.mascota_id");
	$miConexion->verListaPostulaciones();

    //SELECT personal.nombre,personal.apellido, mascotas.nombre,estados.estado FROM personal INNER JOIN postulaciones ON personal.persona_id= postulaciones.persona_id INNER JOIN mascotas ON postulaciones.mascota_id= mascotas.mascota_id INNER JOIN estados ON postulaciones.estado_id = estados.estado_id;
    ?>
	