<?php

	$CodReg = filter_input(INPUT_GET, "CodReg");
	$Username = filter_input(INPUT_GET, "Username");
	$Nome = filter_input(INPUT_GET, "Nome");
	$Sobrenome = filter_input(INPUT_GET, "Sobrenome");
	$Email = filter_input(INPUT_GET, "Email");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if ($connection){
		$query = mysqli_query($connection, "update reg set Username='$Username', Nome='$Nome', Sobrenome='$Sobrenome', Email='$Email' where CodReg='$CodReg';");
		if ($query){
			header("Location: ../Utilizadores.php");
		} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
?>