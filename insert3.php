<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$con = $_POST['Contact_num'];
$pass = $_POST['your_pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (contact_num, pass)
VALUES ('$con', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
