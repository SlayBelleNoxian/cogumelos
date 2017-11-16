<?php
$id = filter_input(INPUT_GET, "id");
$tipo = filter_input(INPUT_GET, "tipo");
$tipoid = filter_input(INPUT_GET, "tipoid");
include("../../core/connection.php");

if($connection){
	$query = mysqli_query($connection, "Delete from ".$tipo." where ".$tipoid." ='$id'");
	if ($query){
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}
?>