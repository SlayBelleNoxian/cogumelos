<?php

	$Idarvore = filter_input(INPUT_GET, "Idarvore");
	$Arvore = filter_input(INPUT_GET, "Arvore");

	include("../../core/connection.php");

	if ($connection){
		$query = mysqli_query($connection, "update arvore set Arvore='$Arvore' where Idarvore='$Idarvore';");
		if ($query){
			header("Location: ../Admin.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>