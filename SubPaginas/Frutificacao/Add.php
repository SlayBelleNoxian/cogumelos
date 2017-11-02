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
		$query4 = mysqli_query($connection, "Select * from modoct");
		$query5 = mysqli_query($connection, "Select * from modo");
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
	  	<form action="Adicionar.php">
			<table>
	  			<input type="hidden" name="id">
	  			<tr><td><p align="right">Nº: <input type="int" name="N" required></p></td></tr>
	  			<tr><td><p align="right">Data de Choque Termico: <input type="date" name="ChoqueTermico" required placeholder="YYYY-MM-DD"></p></td></tr>
	  			<tr><td><p align="right">Modo do Choque Termico: <select name="ModoCT">
		<?php while($linha4 = mysqli_fetch_array($query4)):;?>
			<option><?php echo $linha4[1];?></option>
		<?php endwhile;?>
		</select></p></td></tr>
	  			<tr><td><p align="right">Data: <input type="date" name="Data" required placeholder="YYYY-MM-DD"></p></td></tr>
	  			<tr><td><p align="right">Modo: <select name="Modo">
		<?php while($linha5 = mysqli_fetch_array($query5)):;?>
			<option><?php echo $linha5[1];?></option>
		<?php endwhile;?></p></td></tr>
	  			<tr><td><p align="right">Kg: <input type="decimal" name="Kg" ></p></td></tr>
	  			<tr><td><p align="right">Data de Repouso: <input type="date" name="Repouso" required placeholder="YYYY-MM-DD"></p></td></tr>
	  		</table>
	  		<input class="btn" type="Submit" name="Adicionar" value="Adicionar">
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