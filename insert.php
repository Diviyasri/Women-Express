<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$name = $_POST['name'];
$an = $_POST['Aadhar_num'];
$ph = $_POST['phone'];
$com = $_POST['Complaints'];
$age = $_POST['Age'];
$id = $_POST['Identity'];
$sex = $_POST['Sex'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Complaint (Name, Aadhar_Number, Phone, Complaints, Attacker_Age, Attacker_Identification, Gender)
VALUES ('$name', '$an', '$ph', '$com', '$age', '$id', '$sex')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
