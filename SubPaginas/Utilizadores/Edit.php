<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<?php
  	include("../../core/acess.php");
	include("../../core/admin.php");
		?>
<body>
	<?php include("../../core/header.php");?>
	<div class="content" >	
	 	<?php
	 		$CodReg = filter_input(INPUT_GET, "CodReg");
			$Username = filter_input(INPUT_GET, "Username");
			$Nome = filter_input(INPUT_GET, "Nome");
			$Sobrenome = filter_input(INPUT_GET, "Sobrenome");
			$Email = filter_input(INPUT_GET, "Email");
		?>
	  	<form action="Alterar.php">
	  	<table>
	  			<input type="hidden" name="CodReg" value="<?php echo $CodReg?>">
	  			<tr><td><p align="right">Username: <input type="text" required name="Username" Value="<?php echo $Username ?>"></p></td></tr>
	  			<tr><td><p align="right">Nome: <input type="text" required name="Nome" Value="<?php echo $Nome ?>"></p></td></tr>
	  			<tr><td><p align="right">Sobrenome: <input type="text" required name="Sobrenome" Value="<?php echo $Sobrenome ?>"></p></td></tr>
	  			<tr><td><p align="right">Email: <input type="text" required name="Email" Value="<?php echo $Email ?>"></p></td></tr>
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
