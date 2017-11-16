<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
	<link rel="stylesheet" href="../css/styleheader.css">
</head>
<?php
  	session_start();
  	if (!isset($_SESSION['username']))
  		{
  			header("Location: ../login.php");
  			exit();
  		}

	if($_SESSION['Admin']==0){ 
 			header("Location: ../index.php");
		}
	$connection = mysqli_connect("localhost", "root", "", "cogumelos");
	$query = mysqli_query($connection, "Select * from arvore");
	$query2 = mysqli_query($connection, "Select * from fungo");
	$query3 = mysqli_query($connection, "Select * from lenha");
	$query4 = mysqli_query($connection, "Select * from modoct");
	$query5 = mysqli_query($connection, "Select * from modo");
	$linha1 = mysqli_fetch_assoc($query);
	$linha2 = mysqli_fetch_assoc($query2);
	$linha3 = mysqli_fetch_assoc($query3);
	$linha4 = mysqli_fetch_assoc($query4);
	$linha5 = mysqli_fetch_assoc($query5);
	$total1 = mysqli_num_rows($query);
	$total2 = mysqli_num_rows($query2);
	$total3 = mysqli_num_rows($query3);
	$total4 = mysqli_num_rows($query4);
	$total5 = mysqli_num_rows($query5);

?>
<body>
	<header>
		<div class="container">
			<div class="avatar-container">
				<div class="logo">
					<img src="../img/user-icon.png">
				</div>
				<div class='avatar-text'>
				<?php echo $_SESSION['Nome']," ",$_SESSION['Sobrenome']; ?>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="../Subpaginas/Lotes.php">Lotes</a></li>
					<li><a href="../Subpaginas/Admin.php">Admin Zone</a></li>
					<li><a href="../Subpaginas/Utilizadores.php">Utilizadores</a></li>
					<li><a href="../Subpaginas/Frutificacao.php">Frutificação</a></li>
					<li><a href="../core/logout.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="content" >	

		<ul>
			<li class="libtn"><a href="Arvore/adicionara.php" class="btn">Adicionar</a></li>
		</ul>
		<br>
		<div class="table_ed">
	<table class="table-fill">
		<tr>
			<td>Tipo de Arvore</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
		if($total1){ do {
		?>
		<tr>
			<td><?php echo $linha1['Arvore'] ?></td>
			<td><a href="<?php echo "Arvore/EditArvore.php?Idarvore=". $linha1['Idarvore'] . "&Arvore=" . $linha1['Arvore']?>"> <img class="imgs" src="../img/Edit.ico"></a></td>
			<td><a href="<?php echo "Arvore/Eliminararvore.php?Idarvore=". $linha1['Idarvore'] ?>"> <img class="imgs" src="../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha1 = mysqli_fetch_assoc($query));}
		?>
	</table>
	</div>	
	
	<br>

	<ul>
			<li class="libtn"><a href="Fungo/adicionarf.php" class="btn">Adicionar</a></li>
		</ul>
		<br>
		<div class="table_ed">
	<table class="table-fill">
		<tr>
			<td>Tipo de Fungo</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
		if($total2){ do {
		?>
		<tr>
			<td><?php echo $linha2['Fungo'] ?></td>
			<td><a href="<?php echo "Fungo/EditFungo.php?Idfungo=". $linha2['Idfungo'] . "&Fungo=" . $linha2['Fungo']?>"> <img class="imgs" src="../img/Edit.ico"></a></td>
			<td><a href="<?php echo "Fungo/EliminarFungo.php?Idfungo=". $linha2['Idfungo'] ?>"> <img class="imgs" src="../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha2 = mysqli_fetch_assoc($query2));}
		?>
	</table>
	</div>	
	
	<br>
	
		<ul>
			<li class="libtn"><a href="Lenha/adicionarl.php" class="btn">Adicionar</a></li>
		</ul>
		<br>
	<div class="table_ed">
	<table class="table-fill">


		<tr>
			<td>Tipo de Lenha</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
		if($total3){ do {
		?>
		<tr>
			<td><?php echo $linha3['Nome'] ?></td>
			<td><a href="<?php echo "Lenha/EditLenha.php?Idlenha=". $linha3['Idlenha'] . "&Nome=" . $linha3['Nome']?>"> <img class="imgs" src="../img/Edit.ico"></a></td>
			<td><a href="<?php echo "Lenha/EliminarLenha.php?Idlenha=". $linha3['Idlenha'] ?>"> <img class="imgs" src="../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha3 = mysqli_fetch_assoc($query3));}
		?>
	</table>
	</div>

		<br>
	
		<ul>
			<li class="libtn"><a href="modoct/adicionar.php" class="btn">Adicionar</a></li>
		</ul>
		<br>

		<div class="table_ed">
	<table class="table-fill">


		<tr>
			<td>Modo de Choque Termico</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
		if($total4){ do {
		?>
		<tr>
			<td><?php echo $linha4['modoct'] ?></td>
			<td><a href="<?php echo "modoct/Edit.php?idmodoct=". $linha4['idmodoct'] . "&modoct=" . $linha4['modoct']?>"> <img class="imgs" src="../img/Edit.ico"></a></td>
			<td><a href="<?php echo "modoct/Eliminar.php?idmodoct=". $linha4['idmodoct'] ?>"> <img class="imgs" src="../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha4 = mysqli_fetch_assoc($query4));}
		?>
	</table>
	</div>

	<br>
	
		<ul>
			<li class="libtn"><a href="modo/adicionar.php" class="btn">Adicionar</a></li>
		</ul>
		<br>

			<div class="table_ed">
	<table class="table-fill">


		<tr>
			<td>Modo</td>
			<td colspan="2">Operações</td>
		</tr>
		<?php
		if($total5){ do {
		?>
		<tr>
			<td><?php echo $linha5['modo'] ?></td>
			<td><a href="<?php echo "modo/Edit.php?idmodo=". $linha5['idmodo'] . "&modo=" . $linha5['modo']?>"> <img class="imgs" src="../img/Edit.ico"></a></td>
			<td><a href="<?php echo "modo/Eliminar.php?idmodo=". $linha5['idmodo'] ?>"> <img class="imgs" src="../img/Delete.ico"></a></td>
		</tr>
		<?php
		 } while ($linha5 = mysqli_fetch_assoc($query5));}
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