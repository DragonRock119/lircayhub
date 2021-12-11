<?php

function conexion(){
$servername = "localhost";
$username = "id17483408_john";
$password = "eda6=qfPiY\q=zsU";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

return $conn;
}


?>