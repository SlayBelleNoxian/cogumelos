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
	<div class="content" >	
	 	<?php
	 		$id = filter_input(INPUT_GET, "id");
			$N = filter_input(INPUT_GET, "N");
			$data = filter_input(INPUT_GET, "DatadeCriacao");
			$Efungo = filter_input(INPUT_GET, "Especiefungo");
			$Earvore = filter_input(INPUT_GET, "Especiearvore");
			$Elenha = filter_input(INPUT_GET, "EspecieLenha");
			$prod = filter_input(INPUT_GET, "ProducaoTotal");
		?>
	  	<form action="alterar.php">
			<table>
	  			<input type="hidden" name="id" value="<?php echo $id?>">
	  			<tr><td><p align="right">Nº: <input type="int" name="N" required Value="<?php echo $N ?>"></p></td></tr>
	  			<tr><td><p align="right">Data de Criação: <input type="date" name="DatadeCriacao" required value="<?php echo $data ?>"></p></td></tr>
	  			<tr><td><p align="right">Especie De Fungo: <input type="text" name="Especiefungo" required Value="<?php echo $Efungo ?>"></p></td></tr>
	  			<tr><td><p align="right">Especie De Arvore: <input type="text" name="Especiearvore" required Value="<?php echo $Earvore ?>"></p></td></tr>
	  			<tr><td><p align="right">Especie De Lenha: <input type="text" name="EspecieLenha" required Value="<?php echo $Elenha ?>"></p></td></tr>
	  			<tr><td><p align="right">Produção Total: <input type="decimal" name="ProducaoTotal" Value="<?php echo $prod ?>"></p></td></tr>
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