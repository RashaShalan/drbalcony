<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$database="drbalcony_codetest"; */
define('username', 'root');
define('password', '');
define('servername', 'localhost');
define('database', 'drbalcony_codetest');
// Create connection
 $conn = new mysqli(servername, username, password,database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>