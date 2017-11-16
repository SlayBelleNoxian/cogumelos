<head>
	<meta charset="utf-8">
	<title> Registar </title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<body>
<?php
 	include("../../core/acess.php");
	include("../../core/admin.php");
		?>
<header>
	<?php include("../../core/header.php"); ?>
	<div class="content" >
	<table>	
		<Form id="registerform" action="" method="POST">
			<tr><td><p align="right">Primeiro Nome: <input type="text" id="firstname" name="fname" placeholder="Primeiro Nome" required/></p></td></tr>
			<tr><td><p align="right">Ultimo Nome: <input type="text" id="lastname" name="lname" placeholder="Ultimo Nome" required/></p></td></tr>
			<tr><td><p align="right">Email: <input type="email" id="Email" name="email" placeholder="Email" required/></p></td></tr>
			<tr><td><p align="right">Username: <input type="text" id="username" name="username" placeholder="Username" required/></p></td></tr>
			<tr><td><p align="right">Password: <input type="password" id="password" name="password" placeholder="Password" required/></p></td></tr>
			<tr><td><p align="right"><input type ="submit" name="submit" value="Registar" class="btn"/></p></td></tr>
<?php

include("../../core/connection.php");

if(isset($_POST['submit']))
{
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$query1 = mysqli_query($connection, "SELECT * FROM Reg WHERE username='$username'");
	$salted = "28su2h8j28jwksjdhkasjdh".$password."dsfsaddsfas";
	$hased = hash('sha512', $salted);
	if(mysqli_num_rows($query1) > 0)
	{
		echo 'Username já existe!</span>';
	} else{
	$query = "insert into Reg (Username, Password, Nome, Sobrenome,Email) values ('$username','$hased','$first_name','$last_name','$email')";
	if(mysqli_query($connection, $query)){
		echo '<span>Utilizador registado!</span>';
		}
	}
}	
?>
		</form>
	</table>
	</div>
</body>