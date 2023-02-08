<?php
session_start();

// If the user is not logged in, redirect them back to the login page
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Get the username from the session variable
$username = $_SESSION['username'];

// If the logout button is clicked
if (isset($_POST['logout'])) {
  // Destroy the current session
  session_destroy();

  // Redirect the user back to the login page
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
  </head>
  <body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <form action="" method="post">
      <input type="submit" name="logout" value="Logout">
    </form>
  </body>
</html>
