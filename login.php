<?php
session_start();

// If the form is submitted
if (isset($_POST['submit'])) {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the username and password
  if ($username == 'user' && $password == 'password') {
    // Store the user's information in a session variable
    $_SESSION['username'] = $username;

    // Redirect the user to the welcome page
    header("Location: welcome.php");
    exit;
  } else {
    // Show an error message if the username or password is incorrect
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <?php if (isset($error)) { ?>
      <p style="color:red;"><?php echo $error; ?></p>
    <?php } ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
