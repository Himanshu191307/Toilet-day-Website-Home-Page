<?php session_start();
$servername = "localhost";
$dbname ="adminhyg_dbb";
$username = "adminhyg_adminhygiene";
$password = "hygiene@901";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
//echo "Connected successfully";
?>