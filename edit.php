<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("location: login.php");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Bharatpur Travels</title>
  <meta name="description" content="Demo website introduction | services | gallery | contact">
  <meta name="keywords" content="Demo Website | Demo services">
  <meta name="author" content="Pramod">
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
      <a class="navbar-brand" href="#">Demo Website </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li ><a href="about.php">About us</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="news.php">News and Articles</a></li>
      <li class="active"><a href="booking.php">Reservation</a></li>
      <li><a href="sample.php">Others</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>  
  </nav>
<!-- navbar end -->

<!-- panel -->
<div class="container-fluid" style="margin-top: 60px;">
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading"><h2>Welcome to Dashboard</h2></div>
		</div>
	</div>
</div>
<!-- panel end -->

<!-- dashboard panel -->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="background-color: orange">
			<a href="#"><span class="glyphicon glyphicon-dashboard" style="font-size: 80px; color: black; color: white; padding:20px 0px"></span></a>

			<hr>
			<h2>Posts</h2>
			<h2>Gallery</h2>
			<h2>Reservation</h2>
			<h2>Comments</h2>

		</div>
		<div class="col-sm-9">
			<div class="panel panel-danger">
				<div class="panel-heading"><h2>Edit Booking Information</h2></div>
				<div class="panel-body">
				<form method="get" action="edit_booking.php">
	<div class="form-group">
        <label for="id">ID:</label>
        <input type="text" name="id1" placeholder="ID" class="form-control" value="<?php echo $_GET['bookingid']; ?>">
      </div> 

      <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" placeholder="First Name" class="form-control" value="<?php echo $_GET['fname']; ?>">
      </div> 

      <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" placeholder="Last Name" class="form-control" value="<?php echo $_GET['lname']; ?>">
      </div> 

      <div class="form-group">
        <label for="addrss">Address:</label>
        <input type="text" name="address" placeholder="Address" class="form-control" value="<?php echo $_GET['address']; ?>">
      </div> 

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" placeholder="Phone" class="form-control" value="<?php echo $_GET['contact']; ?>">
      </div> 

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="sample@mail.com" class="form-control" value="<?php echo $_GET['email']; ?>">
      </div> 

      <div class="form-group">
        <label for="person">No. of Reservation:</label>
        <input type="text" name="number" placeholder="No. of Person" class="form-control" value="<?php echo $_GET['number']; ?>">
      </div>

      <button type="submit" class="btn btn-primary btn-lg" name="submit">Update</button>
      <button type="reset" class="btn btn-danger btn-lg">Reset</button>
      </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- dashboard panel end -->
<?php
}
?>
</body>
</html>