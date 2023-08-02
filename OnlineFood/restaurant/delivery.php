<?php
include("../connection/connect.php");

// Initialize session
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the username and password match
    $sql = "SELECT * FROM delivery WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // The username and password match, so set the session variables and redirect to delivery.php
        $_SESSION['username'] = $username;
        header("Location: deliverys.php");
        exit();
    } else {
        // The username and password do not match, so display an error message
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background: #fff;
      border: 1px solid #ccc;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    .submit {
      width: 100%;
      border: none;
      background: #000;
      color: #fff;
      font-weight: bold;
    }

    .error {
      color: red;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Login</h1>
  <?php if (isset($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
  <?php } ?>
  <form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input class="submit" type="submit" value="Login">
  </form>
</body>
</html>
