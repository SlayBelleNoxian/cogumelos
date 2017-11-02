<?php
$Idfungo = filter_input(INPUT_GET, "Idfungo");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from fungo where Idfungo ='$Idfungo'");
	if ($query){
		header("Location: ../Admin.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}


?>