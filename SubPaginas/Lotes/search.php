<html>
<head>
	<meta charset="utf-8">
	<title>Lotes</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<?php
	include("../../core/acess.php");
?>
<body>
	<?php include("../../core/header.php");?>
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

include("../../core/connection.php");

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
			<td><a href="<?php echo "Operacoes/Eliminar.php?id=" . $linha['id'] . "&tipo=lote&tipoid=id"?>"><img class="imgs" src="../img/Delete.ico"></a></td>
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