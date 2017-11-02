<?php
$idarvore = filter_input(INPUT_GET, "Idarvore");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from arvore where Idarvore ='$idarvore'");
	if ($query){
		header("Location: ../Admin.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}


?>