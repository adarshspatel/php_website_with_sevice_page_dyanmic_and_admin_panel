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

$p1 = $_POST['amobile'];
$p2 = $_POST['apassword'];

$sql = "SELECT * FROM res_adminlogin_master where amobile='$p1' and apassword='$p2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  header('Location: home.php');
	 // echo "success";
   // echo "smid: " . $row["smid"]. " - sname: " . $row["sname"]. "<br>";
  }
} else {
  echo "Invalid username or password";
}
$conn->close();
?>