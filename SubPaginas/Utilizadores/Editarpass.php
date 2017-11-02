<html>
	<head>
		<meta charset="utf-8">
		<title>Edit</title>
		<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
		<link rel="stylesheet" href="../../css/styleheader.css">
	</head>
	<?php
		$CodReg = filter_input(INPUT_GET, "CodReg");
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
	<body>
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
	  		<form action="Alterarp.php">
	  			<table>
	  				<input type="hidden" name="CodReg" value="<?php echo $CodReg?>">
	  				<tr><td><p align="right">Nova Password: <input type="Password" required name="Password"></p></td></tr>
	  				<tr><td><p align="right">Confirmar Password: <input type="Password" required name="Npassword"></p></td></tr>
	  			</table>	
	  			<input class="btn" type="Submit" name="Alterar" value="Alterar">
	  		</form>
		</div>
	</body>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script>
		$(window).scroll(function(event) {
			if($(this).scrollTop() >1){
				$('header').addClass('shrink');
			}
			else{
				$('header').removeClass('shrink');
			}
		});
	</script>
</html>	