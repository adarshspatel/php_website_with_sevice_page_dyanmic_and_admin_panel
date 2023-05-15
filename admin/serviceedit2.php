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

$p1 = $_POST['sname'];
$p2 = $_POST['smid'];

$sql = "UPDATE res_service_master SET sname='$p1' WHERE smid=$p2";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header('Location: service.php');
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>