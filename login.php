<html>
<head>
	<meta charset="utf-8">
	<title> Login </title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<br>
		<Form id="loginform" action="core/login.php" method="POST">
		<div class="form-input">
			<input type="text" id="username" name="username" placeholder="Introduzir Username" required />
		</div>
		<div class="form-input">
			<input type="password" id="password" name="password" placeholder="Introduzir Password"/>
		</div>
		<input type ="submit" name="submit" value="Login" class="btn-login"/><br>
		<a href="registar.php"> Registar</a>
		</form>
	</div>
</body>
</html>
