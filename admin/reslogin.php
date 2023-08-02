<?php
// Include the database connection file
include("../connection/connect.php");

// Initialize session
session_start();

if (isset($_POST['submit'])) {
    // Get the username and password from the form
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Prepare the SQL statement with placeholders
    $sql = "SELECT * FROM restaurant WHERE email = ? AND password = ?";
    $stmt = $db->prepare($sql);

    // Bind the parameters to the statement
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // The username and password match, so set the session variable and redirect to the menu page
        $_SESSION['email'] = $email;
        header("Location: all_menu.php");
        exit();
    } else {
        // The username and password do not match, so display an error message
        $error = "Invalid email or password.";
    }

    // Close the statement and database connection
    $stmt->close();
    $db->close();
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

    .error {
      color: red;
      font-size: 16px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>Login</h1>
  
  <?php if (isset($error)): ?>
    <p class="error"><?= $error ?></p>
  <?php endif; ?>

  <form method="post" action="">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="submit">Login</button>
  </form>
</body>
</html>
