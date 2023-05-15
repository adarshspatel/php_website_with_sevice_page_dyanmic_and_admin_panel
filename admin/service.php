<!DOCTYPE html>
<html>
<head>
<title>Service List</title>
</head>
<body>

<h1>Service List</h1>
<p> </p>
<p>
	<a href="service.php">Service</a> &nbsp;&nbsp;
</p>

<a href="serviceadd.php"> Add New Service</a>

<table border="1">
<tr>
<td>	Id
</td>
<td>
		Name
</td>
<td>
		Edit
</td>
<td>
		Delete
</td>
</tr>
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
    echo "<tr><td>" . $row["smid"]. "</td><td>" . $row["sname"]. "</td>";
	echo '<td><a href="serviceedit.php?id='.$row["smid"].'"> Edit </a></td>';
	echo '<td><a href="servicedelete.php?id='.$row["smid"].'"> Delete </a></td>';
	echo "</tr>";
  }
} else {
  echo "0 results";
}


$conn->close();
?>
</table>

</body>
</html>