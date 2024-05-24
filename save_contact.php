<?php 
// received data from FORM
$name = $_POST["name"];
$phone = $_POST["phone_number"];
$email = $_POST["email"];
// code save to db
$host = "localhost:8889";
$user = "root";
$pass = "root";
$db = "exam";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "INSERT INTO contacts(name,phone_number,email) 
                VALUES('$name','$phone','$email')";
$conn->query($sql);
header("Location: /index.php"); 