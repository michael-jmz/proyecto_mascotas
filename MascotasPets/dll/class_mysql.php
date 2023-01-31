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
			echo "<a class='btn btn-warning' href='editar_user.php?idUser=$row[0]'><i class='fa fa-edit'></i></a>";
			echo "&nbsp;";
			echo "<a class='btn btn-danger' href='eliminar_user.php?idUser=$row[0]'><i class='fa fa-trash'></i></a>";
			echo "</td>";
			
			echo "</tr>";
			}
		echo "</tbody>";
		echo "</table>";
	}
}
	
?>