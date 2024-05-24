<?php 
$id = $_GET["id"];

// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "exam";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "DELETE FROM contracts WHERE id = $id";
$conn->query($sql);
header("Location: /demo3.php");