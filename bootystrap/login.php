<?php
	session_start();
	//Check if allready logged in, if so, redirect to admin.php
	if(isset($_SESSION["username"]))
	{
		header("location: admin.php");
	}

	if(isset($_POST["login"]))
	{
		if($_POST["username"] == "test" && $_POST["password"] == "asdf")
		{
			$_SESSION["username"] = $_POST["username"];
			header("location: admin.php");
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NASA - Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">

		<style type="text/css">
			.form-signin
			{
				margin: 0 auto;
				max-width: 330px;
			}
			.form-signin-heading
			{
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<form class="form-signin" action="login.php" method="post">
				<h2 class="form-signin-heading">Please sign in</h2>

				<label for="username" class="sr-only">Email address</label>
				<input name="username" type="text" class="form-control" placeholder="Email address" required="" autofocus="">

				<label for="password" class="sr-only">Password</label>
				<input name="password" type="password" class="form-control" placeholder="Password" required="">

				<button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
			</form>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>