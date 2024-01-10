<?php
// Include your database connection code here
$servername = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "demo"; // Change to your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the request is a POST request and if the ticketId is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ticketId"])) {
    $ticketId = $_POST["ticketId"];

    // Prepare and execute the SQL statement to delete the record
    $sql = "DELETE FROM tickets WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $ticketId);
        if (mysqli_stmt_execute($stmt)) {
            echo "success";
        } else {
            echo "error";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "error";
    }
} else {
    echo "error";
}

mysqli_close($conn);
?>
