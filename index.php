<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="stylesheet" href="css/styleheader.css">
</head>
<?php
	include ("core/acess.php");
?>
<body>
<?php header("Location: Subpaginas/Lotes.php");?>
<?php include("core/header.php");?>
	<div class="content" ></div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
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