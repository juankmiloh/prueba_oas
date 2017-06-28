<?php
	header("access-control-allow-origin: *");
	include ("conexion_BD.php");

	$n_nombre = $_POST['text_nombre'];
	$n_apellido = $_POST['text_apellido'];
	$o_cargo = $_POST['text_cargo'];
	$o_telefono = $_POST['text_telefono'];

	//echo $n_nombre;

	$sql="INSERT INTO empleados(
					  n_nombre, 
					  n_apellido,
					  o_cargo,
					  o_telefono) 
	VALUES('".$n_nombre."',
		   '".$n_apellido."',   
		   '".$o_cargo."',
		   ".$o_telefono.")";
	if (mysqli_query($con,$sql) == true){
		echo "Registro exitoso!";
		//header("Location: http://localhost:8080/prueba_oas/");
		//$bandera_sql += 1;
	}else{
		echo $con->error."\nerror: ". $sql . "<br>";
	}
?>