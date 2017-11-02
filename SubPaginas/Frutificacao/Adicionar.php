<?php
	$id = filter_input(INPUT_GET, "id");
	$N = filter_input(INPUT_GET, "N");
	$ChoqueTermico = filter_input(INPUT_GET, "ChoqueTermico");
	$ModoCT = filter_input(INPUT_GET, "ModoCT");
	$Data = filter_input(INPUT_GET, "Data");
	$Modo = filter_input(INPUT_GET, "Modo");
	$Kg = filter_input(INPUT_GET, "Kg");
	$Repouso = filter_input(INPUT_GET, "Repouso");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if($connection){
		$query = mysqli_query($connection, "Insert into frutificacao values('','$N','$ChoqueTermico','$ModoCT','$Data','$Modo','$Kg','$Repouso');");
		echo $query;
		if ($query){
			header("Location: ../frutificacao.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}
?>