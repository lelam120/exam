<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_contract</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Add New Contract</h1>
    <form action="/save_contact.php" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">phone number</label>
            <input type="number" name="phone_number" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>