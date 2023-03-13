<?php
// Validate form inputs
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    echo "Please fill out all fields.";
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$profile_picture = $_FILES['profile_picture'];

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
$filename = uniqid() . '_' . date('Y-m-d_H-i-s') . '_' . $profile_picture['name'];
$target_file = $target_dir . $filename;


if (move_uploaded_file($profile_picture["tmp_name"], $target_file)) {
    // Save user data to CSV file
    $data = array($name, $email, $filename);
    $fp = fopen('users.csv', 'a');
    if (fputcsv($fp, $data) === false) {
        die('Error writing in file.');
    }
    fclose($fp);

    // Set cookie and start session
    session_start();
    setcookie('username', $name);
    echo "Registration successful!";
    header("Location:readcsv.php");
    exit();
} else {
    echo "Error uploading profile picture.";
}
