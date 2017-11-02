<?php
$CodReg = filter_input(INPUT_GET, "CodReg");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from reg where CodReg ='$CodReg'");
	if ($query){
		header("Location: ../Utilizadores.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}
?>