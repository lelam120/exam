<?php
  // query to DB 
  //1. connect db
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "t2311e php";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <a href="/create_product.php">Create a new product</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone number</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($list as $item):?>
    <tr>
      <th scope="row"><?php echo $item["id"];?></th>
      <td><?php echo $item["name"];?></td>
      <td><?php echo $item["phone_number"];?></td>
      <td><?php echo $item["email"];?></td>
      <td><a href="/edit_contract.php?id=<?php echo $item["id"]; ?>">Edit</a></td>
      <td><a onclick="return confirm('Are you sure delete contract?')" 
          class="text-danger" href="/delete_contract.php?id=<?php echo $item["id"]; ?>">
          Delete</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>
</body>
</html>