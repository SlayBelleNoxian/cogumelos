<?php
  	session_start();
  	if (!isset($_SESSION['username']))
  		{
  			header("Location: /cogumelos/login.php");
  			exit();
  		}
  	?>