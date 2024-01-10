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

	<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
      let isValid = true;

      // Validation for First Name
      const firstNameInput = document.querySelector("input[name='fname']");
      const firstNameValue = firstNameInput.value.trim();
      if (!/^[A-Za-z\s]{1,15}$/.test(firstNameValue)) {
        isValid = false;
        alert("First Name should contain only characters and have a maximum length of 15.");
      }

      // Validation for Last Name
      const lastNameInput = document.querySelector("input[name='lname']");
      const lastNameValue = lastNameInput.value.trim();
      if (!/^[A-Za-z\s]{1,15}$/.test(lastNameValue)) {
        isValid = false;
        alert("Last Name should contain only characters and have a maximum length of 15.");
      }

      // Validation for Address
      const addressInput = document.querySelector("input[name='address']");
      const addressValue = addressInput.value.trim();
      if (!/^[A-Za-z\s]+$/.test(addressValue)) {
        isValid = false;
        alert("Address should contain only characters.");
      }

     // Validation for Phone
const phoneInput = document.querySelector("input[name='phone']");
const phoneValue = phoneInput.value.trim();

// Remove any non-digit characters (e.g., spaces, dashes, parentheses)
const cleanedPhoneNumber = phoneValue.replace(/\D/g, '');

if (cleanedPhoneNumber.length !== 10) {
  isValid = false;
  alert("Phone number should contain exactly 10 digits.");
}


      // Validation for Email
      const emailInput = document.querySelector("input[name='email']");
      const emailValue = emailInput.value.trim();
      if (!/^.{1,20}@.{1,}$/.test(emailValue)) {
        isValid = false;
        alert("Email should be up to 20 characters and include the '@' symbol.");
      }

      // Validation for Number of Persons
      const numberInput = document.querySelector("input[name='number']");
      const numberValue = parseInt(numberInput.value, 10);
      if (isNaN(numberValue) || numberValue < 1 || numberValue > 25) {
        isValid = false;
        alert("Number of Persons should be a numeric value between 1 and 25.");
      }

      if (!isValid) {
        event.preventDefault(); // Prevent form submission
      }
    });
  });
</script>

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
			<a class="navbar-brand" href="index.php">Bharatpur Travels </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li ><a href="about.php">About us</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="news.php">News and Articles</a></li>
			<li class="active"><a href="booking.php">Reservation</a></li>
			<li><a href="contact.php">Contact us</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
	</div>	
	</nav>
<!-- navbar end -->
<!-- title panel start -->
<div class="container-fluid" style="margin-top: 60px;">
	<div class="panel panel-primary">
		<div class="panel panel-heading">
			<h2>Reservation</h2>
		</div>
	</div>
</div>
<!-- title panel end -->
<!-- content and rightbar start-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">				
				<div class="panel panel-primary">
					<div class="panel panel-body">
						<form method="post" action="?">

      <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" placeholder="First Name" class="form-control">
      </div> 

      <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" placeholder="Last Name" class="form-control">
      </div> 

      <div class="form-group">
        <label for="addrss">Address:</label>
        <input type="text" name="address" placeholder="Address" class="form-control">
      </div> 

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" placeholder="Phone" class="form-control">
      </div> 

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="sample@mail.com" class="form-control">
      </div> 

      <div class="form-group">
        <label for="person">Number of Person:</label>
        <input type="text" name="number" placeholder="No. of Person" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary btn-lg" name="submit">Send</button>
      <button type="reset" class="btn btn-danger btn-lg">Reset</button>
      </form>

      <?php
      include 'connection.php';
      if(isset($_POST['submit']))
      {
        $a=$_POST['fname'];
        $b=$_POST['lname'];
        $c=$_POST['address'];
        $d=$_POST['phone'];
        $e=$_POST['email'];
        $g=$_POST['number'];
        
      if($a=='' || $b=='' || $c=='' || $d=='' || $e=='' || $g=='')
      {
        echo "<script>window.alert('Some fields are empty');</script>";
      }
      else
      {
        $query="insert into booking(first_name, last_name, address, contact, email, nob)values('$a','$b','$c','$d','$e','$g')";
        if(mysqli_query($conn,$query))
        {
          echo "<script>window.alert('reserved Successful!');</script>";
        }
        else
        {
          echo "<script>window.alert('Try Later!');</script>";
        }
      }
      }
      mysqli_close($conn);
      ?>
					</div>
					
				</div>


		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">
				<h2>Advertisement</h2>
			</div>
			<div class="panel panel-body">
				<img src="images/a.gif" class="thumbnail" width="100%">
			</div>

			<div class="panel panel-body">
				<img src="images/b.gif" class="thumbnail" width="100%">
			</div>

			<div class="panel panel-body">
				<img src="images/c.gif" class="thumbnail" width="100%">
			</div>
			</div>
		</div>
	</div>
</div>
<!-- content and right bar end -->


<!-- footer -->
<div class="container-fluid jumbotron" style="background-color: #066; color: white;">
	<div class="row">
		<div class="col-sm-4">
			<h2><u>Contact us:</u></h2>
			<h3>Bharatpur Travels.Pvt.Ltd</h3>
			<p><span class="glyphicon glyphicon-map-marker"></span> Bharatpur-10, Chitwan, Nepal</p>
      <p><span class="glyphicon glyphicon-phone"></span> +977 56 525146</p>
      <p><span class="glyphicon glyphicon-envelope"></span> bharatpurtravels@gmail.com</p>

		</div>
		<div class="col-sm-4">
			<h2><u>Google Map</u></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113058.22221487753!2d84.34143610961182!3d27.684248472127276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb3b358a5edd%3A0x7d71e794da2b1fe0!2sBharatpur-10%2C%20Bharatpur%2044207!5e0!3m2!1sen!2snp!4v1693634851083!5m2!1sen!2snp" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="col-sm-4">
			<h2><u>Social Media</u></h2>
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpramod.neupane.359&tabs=timeline&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			
			
		</div>


	</div>
	<footer class="container-fluid bg-4 text-center">
  <p>All right reserved @ <a href="https://www.demosite.com">www.bharatpurtravels.com</a></p>
</footer>
</div>
<!-- footer end -->


</body>
</html>
