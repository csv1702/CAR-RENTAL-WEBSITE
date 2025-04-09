
<?php
// Database credentials
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "carproject";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

