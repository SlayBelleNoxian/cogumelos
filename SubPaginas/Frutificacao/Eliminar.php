<?php
$id = filter_input(INPUT_GET, "id");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from frutificacao where id ='$id'");
	if ($query){
		header("Location: ../frutificacao.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}


?>