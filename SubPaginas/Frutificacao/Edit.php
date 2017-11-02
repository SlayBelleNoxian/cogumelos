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
					<?php if($_SESSION['Admin']==1){ ?>
					<li><a href="../../Subpaginas/Admin.php">Admin Zone</a></li>
					<li><a href="../../Subpaginas/Utilizadores.php">Utilizadores</a></li>
					<?php }?>
					<li><a href="../../Subpaginas/Frutificacao.php">Frutificação</a></li>
					<li><a href="../../core/logout.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
	</header>
		<div class="content">
	 		<?php
	 			$id = filter_input(INPUT_GET, "id");
				$N = filter_input(INPUT_GET, "N");
				$ChoqueTermico = filter_input(INPUT_GET, "ChoqueTermico");
				$ModoCT = filter_input(INPUT_GET, "ModoCT");
				$Data = filter_input(INPUT_GET, "Data");
				$Modo = filter_input(INPUT_GET, "Modo");
				$Kg = filter_input(INPUT_GET, "Kg");
				$Repouso = filter_input(INPUT_GET, "Repouso");
			?>
	  		<form action="alterar.php">
				<table>
	  				<input type="hidden" name="id" value="<?php echo $id?>">
	  				<tr><td><p align="right">Nº: <input type="int" name="N" required Value="<?php echo $N ?>"></p></td></tr>
	  				<tr><td><p align="right">Data de Choque Termico: <input type="date" name="ChoqueTermico" required value="<?php echo $ChoqueTermico ?>"></p></td></tr>
	  				<tr><td><p align="right">Modo do Choque Termico: <input type="text" name="ModoCT" required Value="<?php echo $ModoCT ?>"></p></td></tr>
	  				<tr><td><p align="right">Data: <input type="date" name="Data" required Value="<?php echo $Data ?>"></p></td></tr>
	  				<tr><td><p align="right">Modo: <input type="text" name="Modo" required Value="<?php echo $Modo ?>"></p></td></tr>
	  				<tr><td><p align="right">Kg: <input type="decimal" name="Kg" Value="<?php echo $Kg ?>"></p></td></tr>
	  				<tr><td><p align="right">Data de Repouso: <input type="date" name="Repouso" Value="<?php echo $Repouso ?>"></p></td></tr>
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