<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Bharatpur Travels</title>
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
    <link rel="icon" href="images/favicon.png">
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
                <li ><a href="gallery.php">Gallery</a></li>
                <li class="active"><a href="news.php">News and Articles</a></li>
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
<!-- title panel start -->
<div class="container-fluid" style="margin-top: 80px;">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>News and Articles</h2>
        </div>
    </div>
</div>
<!-- title panel end -->
<!-- content and right bar start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <?php
        include 'connection.php';
        $query2 = "select * from posts";
        $run = mysqli_query($conn, $query2);
        while ($row = mysqli_fetch_array($run)) {

            $title = $row['title'];
            $content = $row['content'];
            $image = $row['photo'];

        ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h2>Challanges faced by us</h2>
                </div>
                <div class="panel-body">
                
                    <p>
                        <?php echo $content; ?>
                    </p>
                    <!-- Resize the image to be 50% of screen width -->
                    <img src="img/<?php echo $image; ?>" class="img-responsive center-block" style="max-width: 80%;">
                </div>
            </div>
        <?php }
        mysqli_close($conn);
        ?>
        </div>
    </div>
</div>
<!-- content and right bar end -->
<!-- footer -->
<div class="container-fluid jumbotron" style="background-color: #066; color: white;">
    <div class="row">
        <div class="col-sm-4">
            <h2><u>Contact us:</u></h2>
            <h3>Bharatpur Travels Pvt.Ltd.</h3>
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

       
