<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $ticketId = $_GET["id"];

    // Include your database connection code here
    $servername = "your_database_host";
    $username = "your_database_username";
    $password = "your_database_password";
    $dbname = "demo";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch the ticket details from the database
    $query = "SELECT * FROM tickets WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $ticketId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $ticket = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
} else {
    header("location: dashboard.php"); // Redirect back to the dashboard if no ticket ID is provided
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Ticket</title>
    <meta name="description" content="Edit ticket information">
    <meta name="keywords" content="Edit Ticket">
    <meta name="author" content="Your Name">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <!-- Include your navbar here -->

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1 align="center">Edit Ticket Information</h1>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="update-ticket.php">
                            <input type="hidden" name="ticketId" value="<?php echo $ticketId; ?>">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $ticket['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_type">Vehicle Type:</label>
                                <input type="text" class="form-control" id="vehicle_type" name="vehicle_type" value="<?php echo $ticket['vehicle_type']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="seat_number">Seat Number:</label>
                                <input type="text" class="form-control" id="seat_number" name="seat_number" value="<?php echo $ticket['seat_number']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="destination">Destination:</label>
                                <input type="text" class="form-control" id="destination" name="destination" value="<?php echo $ticket['destination']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" value="<?php echo $ticket['price']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="text" class="form-control" id="date" name="date" value="<?php echo $ticket['date']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="dashboard.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
