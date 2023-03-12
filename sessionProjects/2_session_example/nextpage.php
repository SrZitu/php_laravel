<?php
session_start();
echo "Hello world!";
echo $_SESSION['count'];
echo "<br/>";
echo "Session ID: " . $_GET['sid'];