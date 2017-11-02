<?php
$idmodo = filter_input(INPUT_GET, "idmodo");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from modo where idmodo ='$idmodo'");
	if ($query){
		header("Location: ../Admin.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}
?>