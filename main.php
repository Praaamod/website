<?php 
session_start();
if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
else
{
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
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
			<a class="navbar-brand" href="index.php">Home</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">

		<ul class="nav navbar-nav navbar-right">
			<li style="text-transform: uppercase;"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
		</ul>
	</div>
	</div>	
	</nav>
<!-- navbar end -->

<div class="container-fluid" style="margin-top: 55px;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <button class="btn btn-warning btn-lg btn-block" onclick="window.open('update-gallery.php', '_self')">Update Gallery</button>
                        <button class="btn btn-danger btn-lg btn-block" onclick="window.open('update-post.php', '_self')">Update Post</button>
                        <button class="btn btn-danger btn-lg btn-block" onclick="window.open('update-reservation.php', '_self')">Reservation</button>
                        <button class="btn btn-danger btn-lg btn-block" onclick="window.open('ticketrecord.php', '_self')">Buy Ticket</button> <!-- Changed 'defult.php' to 'default.php' -->
                        <button class="btn btn-danger btn-lg btn-block" onclick="window.open('showcontact.php','_self')">Contact</button>

                    </div>
                </div>
            </div>
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<h1 align="center">Welcome to Dashboard</h1>
				</div>
				<div class="panel panel-body">
					<p>
						This is dashboard of the site which can help you to update gallery, post, reservation and subcription in easily. 
					</p>
					<p>Thank you for the using our dashboard.</p>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>

<?php 
}
 ?>