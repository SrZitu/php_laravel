<?php

$numbers=array(8,23,15,42,16,4);
// print_r($numbers);
// echo PHP_EOL;
// ===========

// var_dump($numbers);
// echo PHP_EOL;

// =========

// echo count( $number );
// echo PHP_EOL;

// =========

// echo max($numbers);
// echo PHP_EOL;

// =========

// echo min($numbers);
// echo PHP_EOL;

// =========

// sort( $numbers );
// print_r($numbers);
// echo PHP_EOL;

// =========


// rsort( $numbers );
// print_r($numbers);
// echo PHP_EOL;

// =========

// print_r( $numbers );
// echo PHP_EOL;
// =========
/* ==============================================================================
//PHP implode() is a string function, which joins the array elements in a string.
// It is a binary-safe function. 
//In implode() function, parameters can be passed in any order.
======================================================================================
*/
echo $num_string = implode( ",", $numbers );

echo PHP_EOL;

$input_arr1 = array ('Hello', 'everyone!');  
$input_arr2 = array ('One' => 'Welcome', 'Two' => 'to', 'Three' => 'Javatpoint');  
  
//join both array elements  
echo implode(' ostad ',$input_arr1),  implode(' ostad ', $input_arr2); 
echo PHP_EOL;

// =========
/* ==============================================================================
PHP explode() is a string function, which splits a string by a string. 
In simple words, we can say that it breaks a string into an array. 
The explode() function has a "separator" parameter, 
which cannot contain an empty string, because it holds the original string that is to be split. 
It is a binary-safe function.
======================================================================================
*/
$Original_str = "Hello, we are here ,to help you.";     
      
// Passed zero   
print_r (explode (",",$Original_str, 0));   
// Passed positive value  
print_r (explode (",",$Original_str, 4));  // jekhanei koma dekhse vag hose gese
// Passed negative value   
print_r (explode (" ",$Original_str, -3));  //last 3 ta element trim korse

print_r( explode( ",",$num_string ) );
echo PHP_EOL;
// =========

echo in_array( 1, $numbers ); // returns T/F true 1 and false hole blank
echo PHP_EOL;
// =========
// echo in_array( 19, $numbers ); // returns T/F