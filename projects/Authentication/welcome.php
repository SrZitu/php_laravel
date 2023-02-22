<?php

session_start();
if(isset($_SESSION['name'])){
$name=$_SESSION['name'];
}else{
	header("Location: index.html");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
</head>
<body>
	<h2>Wellcome <?php  echo $name;?>!</h2>
	<p>You successfully loged in</p>
	<a href="logout.php">Logout</a>
</html>