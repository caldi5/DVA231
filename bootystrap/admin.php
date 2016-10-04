<?php
	include("dbconn.php");
	session_start();
	if(!isset($_SESSION["username"]))
		header("location: login.php");;
	

	//Newsupload
	if(isset($_POST["newsUpload"])) 
	{
		// Check exists
		if (file_exists("uploads/" . basename($_FILES["fileToUpload"]["name"]))) 
		{
			$error = "A file by that name already exists";
		}

		// Check filesize
		if ($_FILES["fileToUpload"]["size"] > 500000) 
		{
			$error = "File is to big";
		}

		// Check if file is image or video
		if(strstr(mime_content_type($_FILES["fileToUpload"]["tmp_name"]), "video/"))
		{
	    	//Code for video
		}
		else if(strstr(mime_content_type($_FILES["fileToUpload"]["tmp_name"]), "image/"))
		{
	    	//Code for image
		}
		else
		{
			$error = "Uploaded file is not an image or video";
		}

		if(!isset($error))
		{
			//Do the actuall uploading
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . basename($_FILES["fileToUpload"]["name"]))) 
			{
				$image = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
			}
			else
			{
				$error = "File upload failed unknown error";
			}
		}

		$title = $conn->real_escape_string($_POST["title"]);
		$text = $conn->real_escape_string($_POST["mainText"]);
		$username = $_SESSION["username"];
		if(!isset($error))
		{
			if(!$conn->query("INSERT INTO news(user, type, title, text, imagepath) VALUES ('$username','Jumbotron', '$title', '$text', '$image')") === TRUE)
			{
				$error ="Connection failed: " . $conn->error;
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NASA - Bootstrap</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="index.php">Index</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php">Logout</a></li>";
				</ul>
			</div>
		</nav>

		<div class="container">
			<h1>New Newstory</h1>
			<?php
				if(isset($error))
				{
					echo "<div class=\"alert alert-s\">";
					echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
					echo "<strong>Error</strong> ".$error;
					echo "</div>";
				}
				else if(isset($_POST["newsUpload"]))
				{
					echo "<div class=\"alert alert-success\">";
					echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
					echo "<strong>Sucsess</strong> ";
					echo "</div>";
				}	
			?>
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
				  <label>Select news type:</label>
				  <select class="form-control" name="newsType">
						<option>Jumbotron</option>
						<option>Double</option>
						<option>Single</option>
				  </select>
				</div>
				<div class="form-group">
					<label>Title:</label>
					<input type="text" maxlength="50" class="form-control" name="title" placeholder="Chose a title" required autofocus>
				</div>
				<div class="form-group">
					<label>text</label>
					<textarea maxlength="500" class="form-control" rows="5" name="mainText"></textarea>
				</div>
				<div class="form-group">
					<label>Upload an image or video</label>
					<input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
				</div>
				<div class="form-group">
				  <label>Select category:</label>
				  <select class="form-control" name="category">
				    <option>Category 1</option>
				    <option>Category 2</option>
				    <option>Category 3</option>
				    <option>Category 4</option>
				  </select>
				</div>	
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="newsUpload">Submit</button>
			</form>
		</div>
	</body>
</html>
