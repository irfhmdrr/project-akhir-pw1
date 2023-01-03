<?php
// Start the session
session_start();

// Connect to the database
$db = mysqli_connect("localhost", "irfaahmadr28", "Mancity1894", "KOPI");

// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Get the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check the credentials against the database
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    // Login successful, set the session variable
    $_SESSION['logged_in'] = true;
    echo "<script>alert('Welcome')</script>";
    header("Location: index.php");
  } else {
    // Login failed, display an error message
    echo "<script>alert('Invalid username or password')</script>";
  }
}