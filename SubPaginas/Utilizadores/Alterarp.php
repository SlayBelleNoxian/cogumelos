<?php
	$connection = mysqli_connect("localhost", "root", "", "cogumelos");
	$CodReg = filter_input(INPUT_GET, "CodReg");
 	$Password = filter_input(INPUT_GET, "Password");
	$Npassword = filter_input(INPUT_GET, "Npassword");
		 if ($Password==$Npassword){
			$salted = "28su2h8j28jwksjdhkasjdh".$Password."dsfsaddsfas";
			$hased = hash('sha512', $salted);
			if ($connection){
			$query = mysqli_query($connection, "update reg set Password='$hased' where CodReg='$CodReg';");
		if ($query){
			header("Location: ../Utilizadores.php");
		}else 
 			die("Erro: ".mysqli_error($connection));
	}else 
 			die("Erro: ".mysqli_error($connection));
}else 
 			die("Erro");	
?>