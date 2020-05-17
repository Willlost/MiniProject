<?php
	session_start();
	session_unset();
	$_SESSION['login'] = false;
	header('location:index.php');
?>