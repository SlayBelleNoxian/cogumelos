<?php
	$Idlenha = filter_input(INPUT_GET, "Idlenha");
 	$Nome = filter_input(INPUT_GET, "Nome");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if($connection){
		$query = mysqli_query($connection, "Insert into Lenha values('','$Nome');");
		if ($query){
			header("Location: ../Admin.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}

?>