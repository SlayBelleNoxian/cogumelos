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
	 		$Idlenha = filter_input(INPUT_GET, "Idlenha");
			$Nome = filter_input(INPUT_GET, "Nome")
		?>
	  	<form action="alterarlenha.php">
	  	<table>
	  			<input type="hidden" name="Idlenha" value="<?php echo $Idlenha?>">
	  			<tr><td><p align="right">Especie de Lenha: <input type="text" required name="Nome" Value="<?php echo $Nome ?>"></p></td></tr>
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