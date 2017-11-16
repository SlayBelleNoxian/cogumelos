<?php
	$idfungo = filter_input(INPUT_GET, "Idfungo");
 	$fungo = filter_input(INPUT_GET, "Fungo");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if($connection){
		$query = mysqli_query($connection, "Insert into fungo(fungo) values('$fungo');");
		if ($query){
			header("Location: ../Admin.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}

?>