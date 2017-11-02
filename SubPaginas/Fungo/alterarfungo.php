<?php

	$Idfungo = filter_input(INPUT_GET, "Idfungo");
	$Fungo = filter_input(INPUT_GET, "Fungo");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if ($connection){
		$query = mysqli_query($connection, "update fungo set Fungo='$Fungo' where Idfungo='$Idfungo';");
		if ($query){
			header("Location: ../Admin.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>