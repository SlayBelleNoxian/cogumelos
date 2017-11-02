<?php

	$Idlenha = filter_input(INPUT_GET, "Idlenha");
	$Nome = filter_input(INPUT_GET, "Nome");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if ($connection){
		$query = mysqli_query($connection, "update lenha set Nome='$Nome' where Idlenha='$Idlenha';");
		if ($query){
			header("Location: ../Admin.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>