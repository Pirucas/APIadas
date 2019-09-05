<?php
	$dbservername = "localhost";
	$dbusername = "user";
	$dbpassword = "pass";
	$dbname = "db_piadas";
	
	$conectionanimation = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
	//Acentos
	mysqli_set_charset($connection,"UTF8");

	if(! $connection){
		die('Erro a conectar a BD:'.mysqli_error());
	}
?>
