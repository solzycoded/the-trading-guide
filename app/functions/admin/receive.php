<?php
	// include the login file that holds the class Login
	include('login.php');

	// pass the validated values to the receiving class (check if they're correct)
	$login = new Login($_GET['email'], $_GET['pass']);

	// validate user
	$login->validateuser();
?>