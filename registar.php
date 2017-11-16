<head>
	<meta charset="utf-8">
	<title> Registar </title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<Form id="registerform" action="" method="POST">
		<div class="form-input">
		<input type="text" id="firstname" name="fname" placeholder="Primeiro Nome" required/>
		</div>
		<div class="form-input">
		<input type="text" id="lastname" name="lname" placeholder="Ultimo Nome" required/>
		</div>
		<div class="form-input">
			<input type="email" id="Email" name="email" placeholder="Email" required/>
		</div>
		<div class="form-input">
			<input type="text" id="username" name="username" placeholder="Username" required/>
		</div>
		<div class="form-input">
			<input type="password" id="password" name="password" placeholder="Password" required/>
		</div>
		<input type ="submit" name="submit" value="Registar" class="btn-login"/>
		<br>
		<a href="login.php"> Login</a><br>

<?php

include("core/connection.php");

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
		echo '<span style="color:#fff">Username já existe!</span>';
	} else{
	$query = "insert into Reg (Username, Password, Nome, Sobrenome,Email) values ('$username','$hased','$first_name','$last_name','$email')";
	if(mysqli_query($connection, $query)){
		echo '<span style="color:#fff">Utilizador registado!</span>';
		}
	}
}	
?>
		</form>
	</div>
</body>

