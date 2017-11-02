<?php
	$idarvore = filter_input(INPUT_GET, "Idarvore");
 	$arvore = filter_input(INPUT_GET, "Arvore");

	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	if($connection){
		$query = mysqli_query($connection, "Insert into arvore values('','$arvore');");
		if ($query){
			header("Location: ../Admin.php");
		}else {
			die ("Error: ".mysqli_error($connection));
		}
	}else{
		die ("Error: ".mysqli_error($connection));
	}

?>