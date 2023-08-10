<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="wtl";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// $sql="Create table college(id INT(2) ,name VARCHAR(6),age int(3))";
$sql="insert into college values(1,'Amrutha',23)";
if($conn->query($sql)==TRUE){
    echo "Created successfully:)";
}
else{
    echo "not created :(";
}
echo "Connected successfully.:)";
?>

