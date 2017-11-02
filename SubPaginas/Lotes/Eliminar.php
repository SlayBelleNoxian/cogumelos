<?php
$id = filter_input(INPUT_GET, "id");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from lote where id ='$id'");
	if ($query){
		header("Location: ../Lotes.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}


?>