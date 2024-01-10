<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
} else {
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
                        <button class="btn btn-danger btn-lg btn-block" onclick="window.open('ticketrecord.php', '_self')">Buy Ticket</button>
                        <button class="btn btn-danger btn-lg btn-block" onclick="window.open('showcontact.php','_self')">Contact</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1 align="center">Ticket Information</h1>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Vehicle Type</th>
                                    <th>Seat Number</th>
                                    <th>Destination</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                   
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include 'connection.php';
                                $query = "SELECT * FROM tickets "; // This filters out past dates
                                $run = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_array($run)) {
                                   
                                    $name = $row['name'];
                                    $vehicle_type = $row['vehicle_type'];
                                    $seat_number = $row['seat_number'];
                                    $destination = $row['destination'];
                                    $price = $row['price'];
                                    $date = $row['date']; // Assuming your date column is named 'date'
                                    $formattedDate = date('l, F j, Y', strtotime($date));
                                ?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $vehicle_type; ?></td>
                                        <td><?php echo $seat_number; ?></td>
                                        <td><?php echo $destination; ?></td>
                                        <td><?php echo $price; ?></td>
                                        <td><?php echo $formattedDate; ?></td>
                                        
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

    <script>
        function deleteTicket(ticketId) {
            
                if (confirm("Are you sure you want to delete this record?")) {
                // Perform the deletion here, for example, using AJAX
                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: {
                        id: ticketId
                    },
                    success: function(response) {
                        if (response === 'success') {
                            location.reload(); // Reload the page after successful deletion
                        } else {
                            alert("Failed to delete the record.");
                        }
                    }
                });
            }
        }
    </script>
</body>

</html>
<?php
}
?>
