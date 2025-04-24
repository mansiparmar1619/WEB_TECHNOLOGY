<?php
$db_host = "localhost"; // Or your database host
$db_user = "root"; // Database username
$db_pass = "root"; // Database password
$db_name = "np_solutions_db"; // Database name

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error, 0); // Log the error
    die("Connection failed: " . $conn->connect_error);
}

// Function to get the database connection (for use in other scripts)
function connectDB() {
    global $conn;
    return $conn;
}
?>