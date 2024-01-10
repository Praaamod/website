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
	<meta name="description" content="Demo website introduction | services | gallery | contact">
	<meta name="keywords" content="Demo Website | Demo services">
	<meta name="author" content="Rupak Chaudhary">
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
			<a class="navbar-brand" href="#">Dashboard</a>
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
					<h1 align="center">Reservation Information</h1>
				</div>
				<div class="panel panel-body">
					<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Email</th>
							<th>No. of Reservation</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>

					<tbody>
						<?php
						include 'connection.php';
						$query="select * from booking";
						$run=mysqli_query($conn,$query);
						
      					while($row=mysqli_fetch_array($run))
      					{
      						$id=$row['id'];
      						$a=$row['first_name'];
        					$b=$row['last_name'];
        					$c=$row['address'];
        					$d=$row['contact'];
        					$e=$row['email'];
        					$f=$row['nob'];
      					
						?>
						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $a; ?></td>
							<td><?php echo $b; ?></td>
							<td><?php echo $c; ?></td>
							<td><?php echo $d; ?></td>
							<td><?php echo $e; ?></td>
							<td><?php echo $f; ?></td>
							
							<td><a href="edit.php?bookingid=<?php echo $id; ?>&fname=<?php echo $a; ?>&lname=<?php echo $b; ?>&address=<?php echo $c; ?>&contact=<?php echo $d; ?>&email=<?php echo $e; ?>&number=<?php echo $f; ?>">Edit</a></td>
							<td><a href="delete.php?Del=<?php echo $id; ?>">Delete</a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
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