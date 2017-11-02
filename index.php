<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="stylesheet" href="css/styleheader.css">
</head>
<?php
	include ("core/acess.php");
?>
<body>
<?php header("Location: Subpaginas/Lotes.php");?>
<header>
	<div class="container">
		<div class="avatar-container">
			<div class="logo">
				<img src="img/user-icon.png">
			</div>
			<div class='avatar-text'>
				<?php echo $_SESSION['Nome']," ",$_SESSION['Sobrenome']; ?>
			</div>
		</div>
		<nav>
			<ul>
				<li><a href="Subpaginas/Lotes.php">Lotes</a></li>
				<?php if($_SESSION['Admin']==1){ ?>
				<li><a href="Subpaginas/Admin.php">Admin Zone</a></li>
				<li><a href="Subpaginas/Utilizadores.php">Utilizadores</a></li>
				<?php }?>
				<li><a href="Subpaginas/Frutificacao.php">Frutificação</a></li>
				<li><a href="core/logout.php">Log Out</a></li>
			</ul>
		</nav>
	</div>
	</header>
	<div class="content" ></div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
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