<!DOCTYPE html>
<html>
<head>
<title>Service Page</title>
</head>
<body>

<h1>Arth Technology - Services</h1>
<p> </p>
<p>
<a href="index.html">Home</a> &nbsp;&nbsp;
<a href="about.html">About Us</a> &nbsp;&nbsp;
<a href="service.html">Service</a> &nbsp;&nbsp;
<a href="contact.html">Contact Us</a> &nbsp;&nbsp;
</p>


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

$sql = "SELECT * FROM res_service_master";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "smid: " . $row["smid"]. " - sname: " . $row["sname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>