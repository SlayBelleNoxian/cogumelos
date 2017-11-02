<?php

	$idmodo = filter_input(INPUT_GET, "idmodo");
	$modo = filter_input(INPUT_GET, "modo");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if ($connection){
		$query = mysqli_query($connection, "update modo set modo='$modo' where idmodo='$idmodo';");
		if ($query){
			header("Location: ../Admin.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>