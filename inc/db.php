<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'u527547848_spel'; 

$conn = mysqli_connect($server, $username, $password, $database);

/*$server = "localhost";
$username = "root";
$password = "";
$db = "u527547848_spel";

$conn = mysqli_connect($server, $username, $password, $db);*/

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>