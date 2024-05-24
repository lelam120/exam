<?php 
$id = $_GET["id"];
$name = $_POST["name"];
$phone = $_POST["phone_number"];
$email = $_POST["email"];

$host = "localhost:8889";
$user = "root";
$pass = "root";
$db = "exam";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "UPDATE contacts set name ='$name', phone_number= '$phone', email='$email'  WHERE id = $id";
$conn->query($sql);
header("Location: /index.php");