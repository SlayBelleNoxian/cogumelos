<?php
	$idmodoct = filter_input(INPUT_GET, "idmodoct");
 	$modoct = filter_input(INPUT_GET, "modoct");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if($connection){
		$query = mysqli_query($connection, "Insert into modoct values('','$modoct');");
		if ($query){
			header("Location: ../Admin.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}


