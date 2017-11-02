<?php

	$id = filter_input(INPUT_GET, "id");
 	$N = filter_input(INPUT_GET, "N");
	$data = filter_input(INPUT_GET, "DatadeCriacao");
	$Efungo = filter_input(INPUT_GET, "Especiefungo");
	$Earvore = filter_input(INPUT_GET, "Especiearvore");
	$Elenha = filter_input(INPUT_GET, "EspecieLenha");
	$prod = filter_input(INPUT_GET, "ProducaoTotal");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if ($connection){
		$query = mysqli_query($connection, "update lote set N='$N', DataDeCriacao='$data', Especiefungo='$Efungo', Especiearvore='$Earvore', EspecieLenha='$Elenha' ,ProducaoTotal='$prod' where id='$id';");
		if ($query){
			header("Location: ../Lotes.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>