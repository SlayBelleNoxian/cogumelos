<html>
<head>
	<meta charset="utf-8">
	<title>Frutificação</title>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
	<link rel="stylesheet" href="../css/styleheader.css">
</head>
<?php include("../core/acess.php"); ?>
<body>
	<?php include("../core/header.php");?>
	<div class="content" >	
		<ul>
			<li class="libtn"><a href="Frutificacao/add.php" class="btn">Adicionar</a></li>
		</ul>
			<?php
	include("../core/connection.php");
	$dados = mysqli_query($connection, "select * from frutificacao order by N");
	$linha = mysqli_fetch_assoc($dados);
	$total = mysqli_num_rows($dados);
	?>
	<br>
		<div class="searchbox" align="right">
			<form action="Frutificacao/search.php">
				<input type="text" name="search"/>
				<input type="submit" value="Procurar"/>
			</form>	
		</div>

	<div class="table_ed">
	<table class="table-fill">
		<tr>
			<td>N</td>
			<td>Data de Choque Termico</td>
			<td>Modo Do Choque Termico</td>
			<td>Data</td>
			<td>Modo</td>
			<td>Kg</td>
			<td>Data de Repouso</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
		if($total){ do {
		?>
		<tr>
			<td><?php echo $linha['N'] ?></td>
			<td><?php echo $linha['ChoqueTermico'] ?></td>
			<td><?php echo $linha['ModoCT'] ?></td>
			<td><?php echo $linha['Data'] ?></td>
			<td><?php echo $linha['Modo'] ?></td>
			<td><?php echo $linha['Kg'] ?></td>
			<td><?php echo $linha['Repouso'] ?></td>
			<td><a href="<?php echo "Frutificacao/Edit.php?id=". $linha['id'] . "&N=" . $linha['N'] . "&ChoqueTermico=" . $linha['ChoqueTermico'] . "&ModoCT=" . $linha['ModoCT'] . "&Data=" . $linha['Data'] . "&Modo=" . $linha['Modo'] . "&Kg=" . $linha['Kg'] . "&Repouso=". $linha['Repouso']?>"> <img class="imgs" src="../img/edit.ico"></a></td>
			<td><a href="<?php echo "Operacoes/Eliminar.php?id=" . $linha['id'] . "&tipo=frutificacao&tipoid=id"?>"><img class="imgs" src="../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha = mysqli_fetch_assoc($dados));}
		?>
	</table>
	</div>
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