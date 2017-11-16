<html>
	<head>
		<meta charset="utf-8">
		<title>Edit</title>
		<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
		<link rel="stylesheet" href="../../css/styleheader.css">
	</head>
	<?php
		$CodReg = filter_input(INPUT_GET, "CodReg");
  	include("../../core/acess.php");
	include("../../core/admin.php");
		
	?>
	<body>
		<?php include("../../core/header.php");?>
		<div class="content" >	
	  		<form action="Alterarp.php">
	  			<table>
	  				<input type="hidden" name="CodReg" value="<?php echo $CodReg?>">
	  				<tr><td><p align="right">Nova Password: <input type="Password" required name="Password"></p></td></tr>
	  				<tr><td><p align="right">Confirmar Password: <input type="Password" required name="Npassword"></p></td></tr>
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