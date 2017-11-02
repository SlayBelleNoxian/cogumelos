<html>
<head>
	<meta charset="utf-8">
	<title>Utilizadores</title>
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
			<li class="libtn"><a href="Utilizadores/add.php" class="btn">Adicionar</a></li>
		</ul>
	<?php
		$connection = mysqli_connect("localhost", "root", "", "cogumelos");
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
			<td><a href="<?php echo "Utilizadores/Eliminar.php?CodReg=". $linha['CodReg'] ?>"> <img class="imgs" src="../img/Delete.ico"></a></td>
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