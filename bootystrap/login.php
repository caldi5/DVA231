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

<body>
	<form method="post">
		username<input type="text" name="username">
		password<input type="password" name="password">
		<input type="submit" name="login" value="Login">
	</form>
</body>