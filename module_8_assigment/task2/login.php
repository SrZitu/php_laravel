<?php
// Retrieve data from form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Check if all fields are filled in
if (empty($email) || empty($password)) {
  echo "Both email and password are required.";
  exit();
}

// Check if email and password are valid 
$validEmail = "zitu094@gmail.com";
$validPassword = "1234";

if ($email === $validEmail && $password === $validPassword) {
  // Redirect to welcome page with first name
  $firstName = "zitu";
  header("Location: wellcome.php?firstName=$firstName");
  exit();
} else {

  // Redirect back to index.php with error message
  $error_message = "Invalid email or password. Please try again.";
  header("Location: index.php?error_message=" . urlencode($error_message));
  exit();
}
