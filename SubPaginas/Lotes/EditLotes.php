<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<?php
	include("../../core/acess.php");

?>
<body>
	<?php include("../../core/header.php");?>
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
	  	<form action="Alterar.php">
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
