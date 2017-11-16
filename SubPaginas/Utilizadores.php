<html>
<head>
	<meta charset="utf-8">
	<title>Utilizadores</title>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
	<link rel="stylesheet" href="../css/styleheader.css">
</head>
<?php
  	include("../core/acess.php");
	include("../core/admin.php");
?>
<body>
	<?php include("../core/header.php");?>
	<div class="content" >	
		<ul>
			<li class="libtn"><a href="Utilizadores/add.php" class="btn">Adicionar</a></li>
		</ul>
	<?php
		include("../core/connection.php");
		$dados = mysqli_query($connection, "select * from reg order by CodReg");
		$linha = mysqli_fetch_assoc($dados);
		$total = mysqli_num_rows($dados);
	?>
	<br>
	<div class="table_ed">
	<table class="table-fill">
		<tr>
			<td>Username</td>
			<td>Nome</td>
			<td>Sobrenome</td>
			<td>Email</td>
			<td colspan="3">Operações</td>
		</tr>
		<?php
		if($total){ do {
		?>
		<tr>
			<td><?php echo $linha['Username'] ?></td>
			<td><?php echo $linha['Nome'] ?></td>
			<td><?php echo $linha['Sobrenome'] ?></td>
			<td><?php echo $linha['Email'] ?></td>
			<td><a href="<?php echo "Utilizadores/Edit.php?CodReg=". $linha['CodReg'] . "&Username=" . $linha['Username'] . "&Nome=" . $linha['Nome'] . "&Sobrenome=" . $linha['Sobrenome'] . "&Email=" . $linha['Email']?>"> <img class="imgs" src="../img/edit.ico"></a></td>
			<td><a href="<?php echo "Utilizadores/EditarPass.php?CodReg=". $linha['CodReg'] ?>"> <img class="imgs" src="../img/edit1.ico"></a></td>
			<td><a href="<?php echo "Operacoes/Eliminar.php?id=" . $linha['CodReg'] . "&tipo=reg&tipoid=CodReg"?>"><img class="imgs" src="../img/Delete.ico"></a></td>
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