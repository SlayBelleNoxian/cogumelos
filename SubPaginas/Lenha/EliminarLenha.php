<?php
$Idlenha = filter_input(INPUT_GET, "Idlenha");
$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if($connection){
	$query = mysqli_query($connection, "Delete from lenha where Idlenha ='$Idlenha'");
	if ($query){
		header("Location: ../Admin.php");
	}else{
		die("Erro: ". mysqli_error($connection));
	}
}else{
	die("Erro: ". mysqli_error($connection));
}
?>