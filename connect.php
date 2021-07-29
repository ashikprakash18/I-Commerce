<?php
$servername = "sql109.epizy.com";
$username = "epiz_27262790";
$password = "XxyEv5l0FHbKHIh";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>