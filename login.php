<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Bharatpur Travels</title>
	<meta name="description" content="Bharatpur Travels introduction | services | gallery | contact">
	<meta name="keywords" content="Bharatpur Travels | Our services">
	<meta name="author" content="pramod">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="favicon icon" href="images/favicon.png">
</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Login to Bharatpur Travels</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">

		<ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
	</div>	
	</nav>
<!-- navbar end -->

<!-- login panel start -->
<div class="container-fluid" style="margin-top: 60px;">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-info">
				
				<div class="panel panel-heading">
					<h2>Login to Administrator</h2>
				</div>

				<div class="panel panel-body">
					<form method="post" action="?">
						
						<div class="form-group">
						<label for="Username">Username:</label>
						<input type="text" name="username" class="form-control" placeholder="Username">
						</div>

						<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
						</div>

						<div class="form-group">
						 <button type="submit" class="btn btn-primary btn-lg" name="submit">Login</button>
      				<button type="reset" class="btn btn-danger btn-lg">Cancel</button>
						</div>

					</form>
				</div>
			</div>
		</div>

		<div class="col-md-4"></div>
	</div>
</div>
<!-- login panel end -->

</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$aa=$_POST['username'];
	$bb=$_POST['password'];

	if($aa=='' || $bb=='')
	{
		echo "<script>window.alert('Username or password is empty')</script>";
	}
	else
	{
		$query="select * from users where username='$aa' and password='$bb'";
		$run=mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0)
		{
			$_SESSION['username']=$aa;
			echo "<script>window.open('main.php','_self')</script>";
		}
		else
		{
			echo "<script>window.alert('Invalid user')</script>";
		}
	}
}
mysqli_close($conn);
?>
