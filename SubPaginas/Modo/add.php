<?php
	$modo = filter_input(INPUT_GET, "idmodo");
 	$modo = filter_input(INPUT_GET, "modo");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if($connection){
		$query = mysqli_query($connection, "Insert into modo (modo)values('$modo');");
		if ($query){
			header("Location: ../Admin.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}

?>