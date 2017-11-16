<?php

	$idmodoct = filter_input(INPUT_GET, "idmodoct");
	$modoct = filter_input(INPUT_GET, "modoct");

	include("../../core/connection.php");

	if ($connection){
		$query = mysqli_query($connection, "update modoct set modoct='$modoct' where idmodoct='$idmodoct';");
		if ($query){
			header("Location: ../Admin.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>