<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$salted = "28su2h8j28jwksjdhkasjdh".$password."dsfsaddsfas";
$hased = hash('sha512', $salted);

if ($username && $password)
{
	$connection = mysqli_connect("localhost", "root", "", "cogumelos");

	$query = mysqli_query($connection, "SELECT * FROM Reg WHERE username='$username' ");

	$numrows = mysqli_num_rows($query);

	if ($numrows!==0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbusername = $row['Username'];
			$dbpassword = $row['Password'];
			$dbnome = $row['Nome'];
			$dbsb = $row['Sobrenome'];
			$CodReg = $row['CodReg'];
			$admin = $row['Admin'];
		}

		if($username==$dbusername && $hased==$dbpassword)
		{
			@$_SESSION['username'] = $username;
			@$_SESSION['Nome'] = $dbnome;
			@$_SESSION['Sobrenome'] = $dbsb;
			@$_SESSION['CodReg'] = $CodReg;
			@$_SESSION['Admin'] = $admin;
			header("Location: ../index.php");
		}else 
 			die("Username/Password incorretos!");
	}
}else 
 	die("Username/Password incorretos!");
?>