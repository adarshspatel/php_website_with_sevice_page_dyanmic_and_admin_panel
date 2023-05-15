<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$p1 = $_GET['id'];

$sql = "DELETE FROM res_service_master WHERE smid=$p1";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header('Location: service.php');
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>