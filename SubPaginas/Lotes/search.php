<html>
<head>
	<meta charset="utf-8">
	<title>Lotes</title>
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
		<ul>
			<li class="libtn"><a href="add.php" class="btn">Adicionar Lote</a></li>
		</ul>
			<br>
		<div class="searchbox" align="right">
		<form action="search.php">
			<input type="text" name="search"/>
			<input type="submit" value="Procurar"/>
		</form>
		</div>
	<div class="table_ed">
	<table class="table-fill">
		<tr>
			<td>N</td>
			<td>Data de Criação</td>
			<td>Especie de Fungo</td>
			<td>Especie de Arvore</td>
			<td>Especie de Lenha</td>
			<td>Produção total</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
$search = filter_input(INPUT_GET, "search");

$connection = mysqli_connect("localhost", "root", "", "cogumelos");

if ($connection){
		$query = mysqli_query($connection, "select * from lote where N like'%".$search."%' or Especiefungo like'%".$search."%' or Especiearvore like '%".$search."%' or EspecieLenha like '%".$search."%' or ProducaoTotal like '%".$search."%'");
		if ($query){
			$linha = mysqli_fetch_assoc($query);
			$total = mysqli_num_rows($query);
			if($total){ do {
			?>
			<tr>
			<td><?php echo $linha['N'] ?></td>
			<td><?php echo $linha['DatadeCriacao'] ?></td>
			<td><?php echo $linha['EspecieFungo'] ?></td>
			<td><?php echo $linha['EspecieArvore'] ?></td>
			<td><?php echo $linha['EspecieLenha'] ?></td>
			<td><?php echo $linha['ProducaoTotal'] ?></td>
			<td><a href="<?php echo "EditLotes.php?id=". $linha['id'] . "&N=" . $linha['N'] . "&DatadeCriacao=" . $linha['DatadeCriacao'] . "&Especiefungo=" . $linha['EspecieFungo'] . "&Especiearvore=" . $linha['EspecieArvore'] . "&EspecieLenha=" . $linha['EspecieLenha'] . "&ProducaoTotal=". $linha['ProducaoTotal']?>"><img class="imgs" src="../../img/edit.ico"></a></td></td>
			<td><a href="<?php echo "Eliminar.php?id=". $linha['id'] ?>"> <img class="imgs" src="../../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha = mysqli_fetch_assoc($query));}
		 ?>
		</table>
	</div>
	</div>
</body>
<script src="../../js/jquery-3.2.1.min.js"></script>
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
<?php
} else {
			die ("Erro: ".mysqli_error($connection));
		}
	}else {
		die ("Erro: ".mysqli_error($connection));
	}
	?>
</html>	