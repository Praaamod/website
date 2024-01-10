<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["Name"];
    $vehicleType = $_POST["vehicleType"];
    $seatNumber = $_POST["seatNumber"];
    $destination = $_POST["destination"];
    $price = $_POST["price"];
    $date =  $_POST["date"];

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the form data into the database
    $sql = "INSERT INTO tickets (name, vehicle_type, seat_number, destination, price, date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssds", $name, $vehicleType, $seatNumber, $destination, $price, $date);

    if ($stmt->execute()) {
        echo '<script>alert("Ticket booked successfully!");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
