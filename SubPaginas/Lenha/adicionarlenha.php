<?php
	$Idlenha = filter_input(INPUT_GET, "Idlenha");
 	$Nome = filter_input(INPUT_GET, "Nome");

	include("../../core/connection.php");

	if($connection){
		$query = mysqli_query($connection, "Insert into Lenha (Nome) values('$Nome');");
		if ($query){
			header("Location: ../Admin.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}

?>