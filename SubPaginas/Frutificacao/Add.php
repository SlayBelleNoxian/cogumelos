<html>
<head>
	<meta charset="utf-8">
	<title>Add</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
	<?php
		include("../../core/acess.php");

		include("../../core/connection.php");
		$query = mysqli_query($connection, "Select * from arvore");
		$query2 = mysqli_query($connection, "Select * from fungo");
		$query3 = mysqli_query($connection, "Select * from lenha");
		$query4 = mysqli_query($connection, "Select * from modoct");
		$query5 = mysqli_query($connection, "Select * from modo");
	?>
<body>
	<?php include("../../core/header.php");?>
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