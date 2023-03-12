<?php
// session_start();

// //example 1

// $userName=$_SESSION['username']="john doe";
// $logedin=$_SESSION['logedin']=true;

// echo "userName: {$userName} " . PHP_EOL;
// echo "logedin:" .($logedin?"yes":"no");

//example 2
// session_start();
// $_SESSION['counter']=$_SESSION['counter']??0; //null close operator.it means if value is not set then set na value 0.
//                                               //else keep the previous set value;
// $_SESSION['counter']++;   //increasing the value by 1 at each refresh in the browser
// echo $_SESSION['counter'];

//example 3

session_name("mySession");
session_start([
    'cookie_lifetime'=>50,
]);
$_SESSION['name']="Sazzad" ;//name and life time test set kore atake comment kre dile
                   //cokkie life time sesh a undefine key 'name ' dekhabe
echo $_SESSION['name'];

