<?php
	session_start();
	if(isset($_SESSION["username"]))
	{
		echo "You are loged in";
	}
	else
	{
		header("location: login.php");;
	}
?>