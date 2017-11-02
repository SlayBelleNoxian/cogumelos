<?php
$idmodoct = filter_input(INPUT_GET, "idmodoct");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from modoct where idmodoct ='$idmodoct'");
	if ($query){
		header("Location: ../Admin.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}
?>