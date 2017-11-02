<html>
<head>
	<meta charset="utf-8">
	<title>Add</title>
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


	$connection = mysqli_connect("localhost", "root", "", "cogumelos");
	$query = mysqli_query($connection, "Select * from arvore");
	$query2 = mysqli_query($connection, "Select * from fungo");
	$query3 = mysqli_query($connection, "Select * from lenha");
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
	 $data = filter_input(INPUT_GET, "DataDeCriacao");
	 $Efungo = filter_input(INPUT_GET, "Especiefungo");
	 $Earvore = filter_input(INPUT_GET, "Especiearvore");
	 $prod = filter_input(INPUT_GET, "ProducaoTotal");
	 ?>
	  <form action="adicionar.php">
			<table>
	  		<input type="hidden" name="id" value="<?php echo $id?>">
	  		<tr><td><p align="right">Nº: <input type="int" name="N" required></p></td></tr>
	  		<tr><td><p align="right">Data de Criação: <input type="Date" name="DataDeCriacao" required placeholder="YYYY-MM-DD"></p></td></tr>
	  		<tr><td><p align="right">Especie De Fungo: <select name="Especiefungo">
		<?php while($linha2 = mysqli_fetch_array($query2)):;?>
			<option><?php echo $linha2[1];?></option>
		<?php endwhile;?>
		</select>
	  		<tr><td><p align="right">Especie De Arvore: <select name="Especiearvore">
		<?php while($linha = mysqli_fetch_array($query)):;?>
			<option><?php echo $linha[1];?></option>
		<?php endwhile;?>
			</select>
			<tr><td><p align="right">Especie De Lenha: <select name="EspecieLenha">
		<?php while($linha = mysqli_fetch_array($query3)):;?>
			<option><?php echo $linha[1];?></option>
		<?php endwhile;?>
			</select>
	  		<tr><td><p align="right">Produção Total: <input type="decimal" name="ProducaoTotal"></p></td></tr>
	  		</table>
	  		<input class="btn"type="Submit" name="Adicionar" value="Adicionar">
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