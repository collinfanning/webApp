<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
//$y = 'steve';
//$x = 'polvino';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
$sql = "INSERT INTO user (fname, lname) VALUES ('$x', '$y');";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>