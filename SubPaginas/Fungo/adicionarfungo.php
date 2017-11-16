<?php
	$idfungo = filter_input(INPUT_GET, "Idfungo");
 	$fungo = filter_input(INPUT_GET, "Fungo");

	include("../../core/connection.php");

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