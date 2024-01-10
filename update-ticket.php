<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ticketId"])) {
    $ticketId = $_POST["ticketId"];
    $name = $_POST["name"];
    $vehicle_type = $_POST["vehicle_type"];
    $seat_number = $_POST["seat_number"];
    $destination = $_POST["destination"];
    $price = $_POST["price"];
    $date = $_POST["date"];

    // Include your database connection code here
    $servername = "your_database_host";
    $username = "your_database_username";
    $password = "your_database_password";
    $dbname = "your_database_name";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the ticket details in the database
    $query = "UPDATE tickets SET name=?, vehicle_type=?, seat_number=?, destination=?, price=?, date=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssdsi", $name, $vehicle_type, $seat_number, $destination, $price, $date, $ticketId);
        if (mysqli_stmt_execute($stmt)) {
            header("location: dashboard.php"); // Redirect back to the dashboard after updating
            exit();
        } else {
            echo "Failed to update the record.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the statement.";
    }

    mysqli_close($conn);
} else {
    header("location: dashboard.php"); // Redirect back to the dashboard if no data is provided
    exit();
}
?>
