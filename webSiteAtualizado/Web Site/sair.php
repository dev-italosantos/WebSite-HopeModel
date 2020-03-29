<?php
	session_start(); 
	unset($_SESSION['login']);
	unset($_SESSION['email']);
	unset($_SESSION['nome']);
	session_destroy();
	header("Location:index.php");
?>
