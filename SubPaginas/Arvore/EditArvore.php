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
	 		$Idarvore = filter_input(INPUT_GET, "Idarvore");
			$Arvore = filter_input(INPUT_GET, "Arvore")
		?>
	  	<form action="alterara.php">
	  	<table>
	  			<input type="hidden" name="Idarvore" value="<?php echo $Idarvore?>">
	  			<tr><td><p align="right">Especie De Árvore: <input type="text" required name="Arvore" Value="<?php echo $Arvore ?>"></p></td></tr>
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