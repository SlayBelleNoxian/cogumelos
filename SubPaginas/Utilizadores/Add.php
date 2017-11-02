<head>
	<meta charset="utf-8">
	<title> Registar </title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<body>
<?php
  	session_start();
  	if (!isset($_SESSION['username']))
  		{
  			header("Location: ../../login.php");
  			exit();
  		}

	if($_SESSION['Admin']==0){ 
 			header("Location: ../index.php");
		}
		?>
<header>
		<div class="container">
			<div class="avatar-container">
				<div class="logo">
					<img src="../../img/user-icon.png">
				</div>
				<div class='avatar-text'>
				<?php echo $_SESSION['Nome']," ",$_SESSION['Sobrenome']; ?>
				</div>
			</div>

			<nav>
				<ul>
					<li><a href="../../Subpaginas/Lotes.php">Lotes</a></li>
					<li><a href="../../Subpaginas/Admin.php">Admin Zone</a></li>
					<li><a href="../../Subpaginas/Utilizadores.php">Utilizadores</a></li>
					<li><a href="../../Subpaginas/Frutificacao.php">Frutificação</a></li>
					<li><a href="../../core/logout.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
	</header>
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

$connection = mysqli_connect("localhost","root","","cogumelos");

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