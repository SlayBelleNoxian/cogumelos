<?php
	$id = filter_input(INPUT_GET, "id");
 	$N = filter_input(INPUT_GET, "N");
	$data = filter_input(INPUT_GET, "DataDeCriacao");
	$Efungo = filter_input(INPUT_GET, "Especiefungo");
	$Earvore = filter_input(INPUT_GET, "Especiearvore");
	$Elenha = filter_input(INPUT_GET, "EspecieLenha");
	$prod = filter_input(INPUT_GET, "ProducaoTotal");

	include("../../core/connection.php");

	if($connection){
		$query = mysqli_query($connection, "Insert into lote(N,DataDeCriacao,Especiefungo,Especiearvore,EspecieLenha,ProducaoTotal) values('$N','$data','$Efungo','$Earvore','$Elenha','$prod');");
		if ($query){
			header("Location: ../Lotes.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}

?>
