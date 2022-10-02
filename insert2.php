<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$name = $_POST['name'];
$an = $_POST['Aadhar_num'];
$con = $_POST['Contact_num'];
$pass = $_POST['your_pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (name, aadhar_num, contact_num, pass)
VALUES ('$name', '$an', '$con', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
