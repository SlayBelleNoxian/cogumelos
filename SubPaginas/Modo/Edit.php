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
	 		$idmodo = filter_input(INPUT_GET, "idmodo");
			$modo = filter_input(INPUT_GET, "modo")
		?>
	  	<form action="alterar.php">
	  	<table>
	  			<input type="hidden" name="idmodo" value="<?php echo $idmodo?>">
	  			<tr><td><p align="right">Modo: <input type="text" required name="modo" Value="<?php echo $modo ?>"></p></td></tr>
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