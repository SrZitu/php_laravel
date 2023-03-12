<?php
//1_session.php file er session ta kei use korte parbo akhen same session name deawar karone
session_name("mySession");
session_start();
echo $_SESSION['name'];
