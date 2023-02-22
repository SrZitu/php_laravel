<?php
session_start();
$valid_user = "sazzad";
$valid_password = "123456";

if ((isset($_POST['name'])) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($valid_user == $name && $valid_password == $password) {
        $_SESSION['name'] = $name;
        header("Location:welcome.php");
        exit();
    } else {
        echo "invalid  user or password";
    }
}
