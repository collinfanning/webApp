<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$z=$_POST['bannerid'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	exit();
}

echo "Connected successfully. ";
$sql = "INSERT INTO user (fname, lname, bannerid) VALUES ('$x', '$y', '$z');";

if ($conn->query($sql) === TRUE) {
	echo $x . " " . $y . " has been added to " . $dbname;

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
