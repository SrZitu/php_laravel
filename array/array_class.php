<?php
//indexed array
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


//3 dimensional array
$StudentInfomations= array(
    array(
        array("Name" => "sazzad", "Age" => "29", "Department" => "CSE"),
        array("Name" => "sahriar", "Age" => "20", "Department" => "CSE"),
        array("Name" => "sakib", "Age" => "14", "Department" => "EEE"),
    ),
    array(
        array("Mobile" => "Redmi 10c", "warranty" => "3 years", "Brand" => "Xiomi"),
        array("Mobile" => "Galaxy A01", "warranty" => "2 years", "Brand" => "Samsung"),
        array("Mobile" => "Note 10", "warranty" => "5 years", "Brand" => "Realme"),
    ),

);
foreach($StudentInfomations as $studentInfo){
    foreach($studentInfo as $eachInfo){
        foreach($eachInfo as $key=>$value){
            echo $key . "::" . " $value";
            echo "<br>";
        }
    }
}


// for($i=0;$i<count($StudentInfomations);$i++){
//     for($j=0;$j<count($StudentInfomations[$i]);$j++){
//         echo "Name:".$StudentInfomations[$i][$j]["Name"] . "<br>"; 
//         echo "Age:".$StudentInfomations[$i][$j]["Age"] . "<br>"; 
//         echo "Department:".$StudentInfomations[$i][$j]["Department"] . "<br>"; 
//   
//     }
// }