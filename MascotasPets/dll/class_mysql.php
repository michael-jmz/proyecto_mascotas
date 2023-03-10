<?php
 
class class_mysqli{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";
	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;
	/*constructor de la clase*/
	function class_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($db != "")$this->BaseDatos=$db;
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		/*conectar al servidor*/
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return$this->Conexion_ID;
	}
	function consulta($sql){
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Consulta_ID){
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}
	/*retorna de campos de la consulta numero de filas*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	
	function verconsulta(){
		echo "<table class='table' border=1>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				//echo "<td>".utf8_encode($row[$i])."</td>";
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	function verconsultaCRUD(){
		echo "<table border='1'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		
		echo "<td>Actualizar</td>";
		echo "<td>Borrar</td>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td><a href='update.php?idUser=$row[0]'>Actualizar</a></td>";
			echo "<td><a href='deleteUser.php?pepito=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsultaMascota(){
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < 1; $i++) {
				
				echo "<option  value=".$row[0].">$row[1] .$this->numcampos(). </option>";
			}
			
		}
		
	}
	function verMascotas(){
		echo "<option selected disabled=''>Seleccione mascota:</option>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			
				//value='.$row[0].' deveulve el valor al selecionar la opcion en este caso el id de mascota
				echo "<option value='$row[0]'>".$row[1]."</option>";         
		}
	}
	
	function verconsultaPostulacion(){
		echo "<table border='1'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		
		echo "<td>Actualizar</td>";
		echo "<td>Borrar</td>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			
			echo "<td><a href='update.php?idUser=$row[0]'>Actualizar</a></td>";
			echo "<td><a href='deleteUser.php?pepito=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	function verListaPostulaciones(){
		echo "<table border='1px'>";
		echo "<tr class='table'>";
		//la primera fila de nuestra tabla
		for ($i=0; $i< $this->numCampos(); $i++){
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo "<td>Actualizar</td>";
		echo "<td>Borrar</td>";
		echo "</tr>";
		//sacamos todo el registro
	  
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<tr>";
			for ($i=0; $i<$this->numCampos(); $i++){
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td><a href='updateUser.php?idUser=$row[0]'>Actualizar</a></td>";
			echo "<td><a href='deletUser.php?idUser=$row[0]'>Borrar</a></td>";
			echo "</tr>";
			}
			echo "</table>";
	}

	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) {
				$row[$i];
			}
			return $row;
		}
	}

	//LISTA DE USUARIOS REGISTRADOS

	function verListaUsuarios(){
		echo "<table class='table table-striped table-dark' id='table_id'>";
		echo "<thead>";
		echo "<tr>";
		//la primera fila de nuestra tabla
		for ($i=0; $i< $this->numCampos(); $i++){
			echo "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo "<th>Acciones</th>";
		echo "</tr>";
		echo "</thead>";
		//sacamos todo el registro
		echo "<tbody>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<tr>";
			for ($i=0; $i<$this->numCampos(); $i++){
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td>";
			echo "<a class='btn btn-warning' title='Editar' href='editar_user.php?id=$row[0]'><i class='fa fa-edit' ></i></a>";
			echo "&nbsp;";
			echo "<a class='btn btn-danger' title='Eliminar' href='eliminar_user.php?id=$row[0]'><i class='fa fa-trash' ></i></a>";
			echo "&nbsp;";
			echo "<a class='btn btn-info' title='Ver' href='ver_lista_postulaciones.php?id=$row[0]'><i class='fa-sharp fa-solid fa-eye'></i>Ver Postulaciones</a>";
			echo "</td>";
			
			echo "</tr>";
			}
		echo "</tbody>";
		echo "</table>";
	}
	function ConsultarUsuario(){
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < 1; $i++) {
				
				echo "$row[1].$this->numcampos()";
			}
			
		}
		
	}
	function verRoles(){
		//echo "<option selected disabled=''>Seleccione Rol:</option>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			
			//value='.$row[0].' deveulve el valor al selecionar la opcion en este caso el id de mascota
			echo "<option value='$row[0]'>".$row[1]."</option>";         
		}
	}
	function verListaMascotas(){
		echo "<table class='table table-striped table-dark' id='table_id'>";
		echo "<thead>";
		echo "<tr>";
		//la primera fila de nuestra tabla
		for ($i=0; $i< $this->numCampos(); $i++){
			echo "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo "<th>Acciones</th>";
		echo "</tr>";
		echo "</thead>";
		//sacamos todo el registro
		echo "<tbody>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<tr>";
			for ($i=0; $i<$this->numCampos(); $i++){
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td>";
			echo "<a class='btn btn-warning' title='Editar' href='editar_mascota.php?idMascota=$row[0]'><i class='fa fa-edit' ></i></a>";
			echo "&nbsp;";
			echo "<a class='btn btn-danger' title='Eliminar' href='eliminar_mascota.php?idMascota=$row[0]'><i class='fa fa-trash' ></i></a>";
			echo "</td>";
			
			echo "</tr>";
			}
		echo "</tbody>";
		echo "</table>";

	}
	function verRazas(){
		//echo "<option selected disabled=''>Seleccione Rol:</option>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			
			//value='.$row[0].' deveulve el valor al selecionar la opcion en este caso el id de mascota
			echo "<option value='$row[0]'>".$row[1]."</option>";         
		}

	}
	function verListaRazas(){
		echo "<table class='table table-striped table-dark' id='table_id'>";
		echo "<thead>";
		echo "<tr>";
		//la primera fila de nuestra tabla
		for ($i=0; $i< $this->numCampos(); $i++){
			echo "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo "<th>Acciones</th>";
		echo "</tr>";
		echo "</thead>";
		//sacamos todo el registro
		echo "<tbody>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<tr>";
			for ($i=0; $i<$this->numCampos(); $i++){
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td>";
			echo "<a class='btn btn-warning' title='Editar' href='editar_raza.php?idRaza=$row[0]'><i class='fa fa-edit' ></i></a>";
			echo "&nbsp;";
			echo "<a class='btn btn-danger' title='Eliminar' href='eliminar_raza.php?idRaza=$row[0]'><i class='fa fa-trash' ></i></a>";
			echo "</td>";
			
			echo "</tr>";
			}
		echo "</tbody>";
		echo "</table>";

	}
	function verListaPostulacion(){
		echo "<table class='table table-striped table-dark' id='table_id'>";
		echo "<thead>";
		echo "<tr>";
		//la primera fila de nuestra tabla
		for ($i=0; $i< $this->numCampos(); $i++){
			echo "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo "<th>Acciones</th>";
		echo "</tr>";
		echo "</thead>";
		//sacamos todo el registro
		echo "<tbody>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<tr>";
			for ($i=0; $i<$this->numCampos(); $i++){
				echo "<td>".$row[$i]."</td>";
			}
			//echo "<td>";
			//echo "<a class='btn btn-danger' title='Eliminar' href='eliminar_postulacion.php?idPostulacion=$row[0]'><i class='fa fa-trash' ></i></a>";
			//echo "</td>";
			
			echo "</tr>";
			}
		echo "</tbody>";
		echo "</table>";
		
	}
	function verCardsPostulaciones(){
		echo "<div class='container mt-3'>";
		echo "<div class='row'>";
		//echo "<option selected disabled=''>Seleccione Rol:</option>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			echo "<div class='col-lg-4 col-md-6 col-sm-12'>";
				echo "<div class='card'>";
					echo"<img src='../img/$row[3]' class='card-img-top' alt='...'>";
					echo "<div class='card-body'>";
					echo "<h5 class='card-title'>".$row[1]."</h5>";
					echo "<p class='card-text'>".$row[2]."</p>";
					echo "<h5 class='card-title'><i class='fa-solid fa-calendar-days'></i> Fecha: ".$row[4]."</h5>";
					echo "<h5 class='card-title'>".$row[5]."</h5>";
					echo "<a class='btn btn-danger' title='Eliminar' href='eliminar_postulacion.php?idMascota=$row[0]'><i class='fa fa-trash' ></i></a>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}  
	}
	function verCardsMascotas(){
		
		echo "<div class='row row-cols-1 row-cols-md-4 g-4'>";
		//echo "<option selected disabled=''>Seleccione Rol:</option>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)){
			
				echo "<div class='col'>";
					echo "<div class='card h-100 border-secondary'>";
						echo"<img src='../img/$row[3]'class='card-img-top' alt='' onerror=this.src='../img/noImage.jpg'>";
						echo "<div class='card-body'>";
						echo "<h5 class='card-title'>".$row[1]."</h5>";
						echo "<h5 class='card-title'>Raza: ".$row[7]."</h5>";
						echo "<p class='card-text'>".$row[2]."</p>";
						echo "<p class='card-text'>Edad:".$row[4]."</p>";
						echo "<a class='btn btn-primary' title='postular' href='../views/guardar_postualcion_card.php?idMascota=$row[0]'>Postular</a>";
						echo "</div>";
				echo "</div>";
			echo "</div>";	
		}
		echo "</div>";
		

	}

}
	
?>