<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS mygym;";


if ($conn->query($sql) === FALSE) {
  echo "Error creating database: " . $conn->error;
}
 
// else{
//   echo "Database created Successfully:)";
// }

$conn -> select_db("mygym");



$sql = " CREATE TABLE IF NOT EXISTS  members ( 
  id int(5) NOT NULL AUTO_INCREMENT, 
  name varchar(30) NOT NULL,
  phone varchar(10) NOT NULL,
  email varchar(40) NOT NULL UNIQUE,
  age int(2) NOT NULL, 
  sex varchar(9) NOT NULL,
  PRIMARY KEY (id) 
  );";


if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
}
// else{
//   echo "Table is also creadted Successfully";
// }



?>