<?php
// Validate form inputs
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    echo "Please fill out all fields.";
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit();
}

// Save profile picture to server
if (!isset($_FILES['profile_picture'])) {
    echo "Please select a profile picture.";
    exit();
}

$target_dir = "uploads/";
$filename=uniqid() . basename($_FILES['profile_picture']['name']);
$target_file = $target_dir .$filename;


if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
    // Save user data to CSV file
    $data = array($name, $email, $filename, date("Y-m-d H:i:s"));
    $fp = fopen('users.csv', 'a');
    fputcsv($fp, $data);
    fclose($fp);

    // Set cookie and start session
    session_start();
    setcookie('username', $name, time() + 3600, '/');
    echo "Registration successful!";
    require_once 'readcsv.php';
} else {
    echo "Error uploading profile picture.";
}
