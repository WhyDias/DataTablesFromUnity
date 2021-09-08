<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unityaccess";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$date = date("d/m");
$name = $_POST["name"];
$score = $_POST["score"];

$sql = "INSERT INTO userdata (classdate, name, score)
VALUES ('$date', '$name', '$score')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>