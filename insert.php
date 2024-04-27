<?php
$custnumb = $_POST["custnumb"];
$custname = $_POST["custname"];
$slsrnumb = $_POST["slsrnumb"];
$custaddr = $_POST["custaddr"];
$balance = $_POST["balance"];
$credlim = $_POST["credlim"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "premier";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customer (custnumb, custname, slsrnumb, custaddr, balance, credlim)
VALUES ('$custnumb', '$custname', '$slsrnumb', '$custaddr', '$balance', '$credlim')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>