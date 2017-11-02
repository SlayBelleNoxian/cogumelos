<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<?php
	session_start();
  	if (!isset($_SESSION['username']))
  		{
  			header("Location: ../../login.php");
  			exit();
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
					<li><a href="../../Subpaginas/Frutificacao.php">Utilizadores</a></li>
					<li><a href="../../core/logout.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="content" >	
	 	<?php
	 		$Idarvore = filter_input(INPUT_GET, "Idarvore");
			$Arvore = filter_input(INPUT_GET, "Arvore")
		?>
	  	<form action="alterara.php">
	  	<table>
	  			<input type="hidden" name="Idarvore" value="<?php echo $Idarvore?>">
	  			<tr><td><p align="right">Especie De Árvore: <input type="text" required name="Arvore" Value="<?php echo $Arvore ?>"></p></td></tr>
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