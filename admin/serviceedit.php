<!DOCTYPE html>
<html>
<head>
<title>Service List</title>
</head>
<body>

<h1>Add New Service</h1>
<p> </p>
<p>
	<a href="service.php">Service</a> &nbsp;&nbsp;
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

$p1 = $_GET['id'];

$sql = "SELECT * FROM res_service_master where smid=$p1";
$result = $conn->query($sql);
$sname = "";
$smid = "";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $sname = $row["sname"];
	  $smid = $row["smid"];
  }
} else {
//  echo "0 results";
}


$conn->close();
?>

<form method="post" action="serviceedit2.php">

  <label for="sname">Service Name:</label><br>
  <input type="hidden" name="smid" value="<?php echo $smid; ?>" >
  <input type="text" id="sname" name="sname" value="<?php echo $sname; ?>"><br>

  
  <input type="submit" value="Save">
</form>



</body>
</html>

