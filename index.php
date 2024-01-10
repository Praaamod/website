

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Bharatpur Travels Pvt.Ltd.</title>
	<meta name="description" content="Bharatpur Travels introduction | services | gallery | contact">
	<meta name="keywords" content="Bharatpur Travels | Our services">
	<meta name="author" content="Pramod">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="favicon icon" href="images/favicon.png">
  <script>
    function validateForm() {
            var name = document.getElementById("Name").value;
            var departureDate = document.getElementById("date").value;
            var price = document.getElementById("price").value;
            var currentDate = new Date().toISOString().split('T')[0]; 
            if (name.length < 6) {
                alert("Name is too short. It should be at least 6 characters.");
                return false;
            }

            if (name.length > 20) {
                alert("Name is too long. It should not exceed 20 characters.");
                return false;
            }
            if (price <= 0) {
                alert("Invalid price. Please select valid vehicle type and seat number.");
                return false;
            }

            if (departureDate < currentDate) {
                alert("Departure date must be in the future.");
                return false;
            }

            // Additional validations for other fields can be added here

            return true; // Submit the form if all validations pass
        }
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
			<a class="navbar-brand" href="#">Bharatpur Travels </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li ><a href="about.php">About us</a></li>
			<li ><a href="gallery.php">Gallery</a></li>
			<li><a href="news.php">News and Articles</a></li>
			<li><a href="booking.php">Reservation</a></li>
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

<!-- slide start -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/slide1.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Welcome to Bharatpur Travels</h3>
        <p>This is welcome section for site!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/slide2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Service 1</h3>
        <p>First services in demo site!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/slide3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Service 2</h3>
        <p>Second services!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- start end -->

<!-- welcome start -->
<div class="container-fluid text-center">
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel panel-heading">
        <h2>Welcome to Bharatpur Travels</h2>
      </div>
      <div class="panel panel-body">
        <p>
          Bharatpur travels is one of the best travels company of Nepal we offer various services like hiace services and scorpio services in rent in different route as well as can provide reservation facilities to our customer, we care customer safety, comfortable travel as well as providing insurance facility in accident cases, we offer clean seat, clean food and experience driver and conductor for customer care, if you are willing to reserve offline you can contact us at our branch offices or you can directly reserve online through our official website. 
        </p>
        <button type="button" class="btn btn-primary btn-lg" onclick="window.open('about.php');">Read More</button>
      </div>
    </div>
  </div>
</div>

<!-- welcome end -->

<!-- content and rightbar start-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel panel-heading">
					<h2>News and Articles</h2>
				</div>
				
				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<h2>Opeaning branches in different places</h2>
					</div>
					<div class="panel panel-body">
					Recently our travel company has started branches in every district to provide all the quality services all over the Nepal. Some district have one some have two or more branches and every branches are providing online ticket booking system to passengers.
					</div>
					<center><button type="button" class="btn btn-primary btn-lg" onclick="window.open('news1.php')">Read More</button></center>
				</div>

				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<h2>Welfare program has been held in Sindupalchowk for Natural disaster victim</h2>
					</div>
					<div class="panel panel-body">
						Bharatpur Travel has participated in welfare program which was held in Sindupalchowk in 3rd November, 2021. They distributed artificial shelters and foods to all flood victims
					</div>
					<center><button type="button" class="btn btn-primary btn-lg" onclick="window.open('news2.php')">Read More</button></center>
				</div>


				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<h2>Free Bus services provided during lockdown</h2>
					</div>
					<div class="panel panel-body">
						Our travel company has provided free bus services during lockdown. We provided free bust services from KTM to Pokhara.
					</div>
					<center><button type="button" class="btn btn-primary btn-lg" onclick="window.open('news3.php')">Read More</button></center>
				</div>


			</div>
		</div>
		
	</div>
</div>
<!-- content and right bar end -->

<!-- services to book -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy ticket Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        select, input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ticket Booking Form</h2>
        <form action="defult.php" method="post" onsubmit="return validateForm()">

              <div class="form-group">
              <label for="Name"> Name:</label>
              <input type="text" id="Name" name="Name" required>
             </div>

          
            <div class="form-group">
                <label for="vehicleType">Vehicle Type:</label>
                <select id="vehicleType" name="vehicleType" required>
                    <option value="Bus">Bus</option>
                    <option value="Hiace">Hiace</option>
                    <option value="Scorpio">Scorpio</option>
                </select>
            </div>

            <div class="form-group">
    <label for="seatNumber">Seat Number:</label>
    <select id="seatNumber" name="seatNumber" required>
        <option value="1A">Row 1, Seat A</option>
        <option value="1B">Row 1, Seat B</option>
        <option value="1C">Row 1, Seat C</option>
        <option value="1D">Row 1, Seat D</option>
        <option value="2A">Row 2, Seat A</option>
        <option value="2B">Row 2, Seat B</option>
        <option value="2C">Row 2, Seat C</option>
        <option value="2D">Row 2, Seat D</option>
        <option value="3A">Row 3, Seat A</option>
        <option value="3B">Row 3, Seat B</option>
        <option value="3C">Row 3, Seat C</option>
        <option value="3D">Row 3, Seat D</option>
        <option value="4A">Row 4, Seat A</option>
        <option value="4B">Row 4, Seat B</option>
        <option value="4C">Row 4, Seat C</option>
        <option value="4D">Row 4, Seat D</option>
        <!-- Add more rows and seats as needed -->
    </select>
</div>



            <div class="form-group">
                <label for="destination">Destination:</label>
                <select id="destination" name="destination" required>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Jhapa">Jhapa</option>
                    <option value="Kanchanpur">Kanchanpur</option>
                    <!-- Add more destination options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" readonly>
            </div>
            <div class="form-group">
        <label for="date"> Departure Date:</label>
        <input type="date" id="date" name="date" required>
    </div>

            <input type="submit" value="Buy Ticket">
        </form>
    </div>

    <script>
        // JavaScript to calculate and set the price based on the selected vehicle type
        const vehicleTypeSelect = document.getElementById("vehicleType");
        const priceInput = document.getElementById("price");

        vehicleTypeSelect.addEventListener("change", function () {
            const selectedVehicleType = vehicleTypeSelect.value;
            let price = 0;

            switch (selectedVehicleType) {
                case "Bus":
                    price = 500;
                    break;
                case "Hiace":
                    price = 550;
                    break;
                case "Scorpio":
                    price = 600;
                    break;
                default:
                    price = 0;
            }

            priceInput.value = price;
        });
    </script>
</body>
</html>

<!-- service end -->

<!-- footer -->
<div class="container-fluid jumbotron" style="background-color: #066; color: white;">
	<div class="row">
		<div class="col-sm-4">
			<h2><u>Contact us:</u></h2>
			<h3>Bharatpur Travels.Pvt.Ltd.</h3>
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
  <p>All right reserved @ <a href="https://www.demosite.com">www.BharatpurTravels.com</a></p>
</footer>
</div>
<!-- footer end -->


</body>
</html>
