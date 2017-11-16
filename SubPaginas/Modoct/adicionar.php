<html>
<head>
	<meta charset="utf-8">
	<title>Add</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	<link rel="stylesheet" href="../../css/styleheader.css">
</head>
<?php
	include("../../core/acess.php");
	include("../../core/admin.php");
	$connection = mysqli_connect("localhost", "root", "", "cogumelos");
	$query = mysqli_query($connection, "Select * from arvore");
	$query2 = mysqli_query($connection, "Select * from fungo");
	$query3 = mysqli_query($connection, "Select * from lenha");
?>
<body>
	<?php include("../../core/header.php");?>
	<div class="content" >	
	  <form action="add.php">
			<table>
	  		<input type="hidden" name="idmodoct" value="<?php echo $idmodoct?>">
	  		<tr><td><p align="right"> Modo de Choque Termico: <input required type="text" name="modoct"></p></td></tr>
	  		</table>
	  		<input class="btn"type="Submit" name="Adicionar" value="Adicionar">
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
