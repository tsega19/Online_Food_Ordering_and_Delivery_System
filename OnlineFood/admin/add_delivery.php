<!DOCTYPE html>
<html lang="en">
<?php 
    
include("../connection/connect.php");
error_reporting(0);
session_start();

    
    // Code to add a delivery person
    if (isset($_POST['submit'])) {
        // Get the form data
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    
        // Insert the data into the database
        $sql = "INSERT INTO delivery_person (name, phone, email, address, password) VALUES ('$name', '$phone', '$email', '$address', '$password')";
        $result = mysqli_query($db, $sql);
    
        if ($result) {
            echo "Delivery person added successfully!";
        } else {
            echo "Error adding delivery person: " . mysqli_error($db);
        }
    }

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Add Delivery Person</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">

  <h1>Add Delivery Person</h1>

  <form action="" method="post">

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>

</body>
</html>

