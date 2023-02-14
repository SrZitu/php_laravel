<?php
$categories = array('Allium', 'Beverage', 'Dairy Bread', 'Fruits & Vegetables', 'Health & nutration');
foreach ($categories as $catagory) {
    echo "$catagory <br>";
}

//associative array
$signUp = array(
    "Email" => "Sazzad@123.com",
    "Pass" => "123",
    "Fname" => "Sazzadur",
    "Lname" => "Rahman"
);
foreach ($signUp as $key => $value) {
    echo "$key" . "$value <br>";
}
// Multidimensional Array
$productList = array(
    array('Mobile', '10,000', 'Redmi'),
    array('Mobile', '12,000', 'poco'),
    array('Mobile', '15,000', 'Redmi 10c'),
    array('Mobile', '16,000', 'Realme Narzo 50'),
);
//echo $productList[3][2]; //row and colmn
foreach ($productList as $eachProduct) {
    foreach ($eachProduct as $eachProperty) {
        echo $eachProperty . "<br>";
    }
}
