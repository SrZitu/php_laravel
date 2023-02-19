<?php
// Commonly used string functions in PHP 

/*
Here is a list of 20 commonly used string functions in PHP:
strlen
substr
strpos
str_replace
trim
strtoupper
strtolower
ucfirst
ucwords
strrev
str_pad
str_repeat
str_split
explode
implode
addslashes
stripslashes
htmlentities
html_entity_decode
strip_tags
======================
These functions can be used to perform various operations on strings such as finding the length of a string, 
extracting substrings, finding and replacing substrings, trimming whitespaces, converting cases, reversing strings, 
padding strings, splitting strings, converting arrays to strings and vice versa, 
encoding and decoding HTML entities, and removing HTML tags.
=============================
*/

// strlen: Returns the length of a string.

$string = "Hello, World!";
$length = strlen($string);

echo "The length of the string is: $length";
echo "\n===========================\n";


// strpos: Returns the position of the first occurrence of a substring in a string.

$string = "Hello, World! is very fun";
$position = strpos($string, "World");

echo "The position of the first occurrence of 'World' is: $position";
echo "\n===========================\n";

// str_replace: Replaces all occurrences of a search string with a replacement string.

$string = "Hello, World! this is my World";
$new_string = str_replace("World", "PHP", $string);

echo "The new string is: $new_string";
echo "\n===========================\n";


// substr: Returns a portion of a string.

$string = "Hello, World!";
$portion = substr($string, 7);

echo "The portion of the string is: $portion";
echo "\n===========================\n";


// trim: Removes whitespaces or specified characters from the beginning and end of a string.

$string = "  Hello, World!  ";
$trimmed = trim($string);

echo "The trimmed string is: $trimmed";
echo "\n===========================\n";


// strtolower: Converts a string to lowercase.

$string = "Hello, World!";
$lower = strtolower($string);

echo "The lowercase string is: $lower";
echo "\n===========================\n";

// strtoupper: Converts a string to uppercase.

$string = "Hello, World!";
$upper = strtoupper($string);

echo "The uppercase string is: $upper";
echo "\n===========================\n";


// explode: Splits a string into an array based on a specified delimiter.

$string = "apple,banana,cherry";
$fruits = explode(",", $string);

print_r($fruits);

// implode: Joins elements of an array into a string using a specified glue.

$fruits = array("apple", "banana", "cherry");
$string = implode(",", $fruits);

echo "The string is: $string";
echo "\n===========================\n";

// str_split: Converts a string into an array of individual characters.

$string = "Hello, World!";
$characters = str_split($string);

print_r($characters);

$string = "hello";
$array = str_split($string, 2);
print_r($array);
echo "\n===========================\n";

// Output: Array ( [0] => he [1] => ll [2] => oo )

// md5: Calculates the MD5 hash of a string.

$string = "Hello, World!";
$hash = md5($string);

echo "The hash is: $hash";
echo "\n===========================\n";

// sha1: Calculates the SHA1 hash of a string.

$string = "Hello, World!";
$hash = sha1($string);

echo "The hash is: $hash";
echo "\n===========================\n";


// ucfirst: This function capitalizes the first character of a string.

$string = "hello world";
echo ucfirst($string);
// Output: Hello world
echo "\n===========================\n";

// ucwords: This function capitalizes the first character of each word in a string.

$string = "hello world";
echo ucwords($string);
// Output: Hello World
echo "\n===========================\n";

// strrev: This function reverses a string.

$string = "hello";
echo strrev($string);
// Output: olleh
echo "\n===========================\n";


// str_pad: This function pads a string to a certain length with another string.
$string = "hello";
echo str_pad($string, 10, "-=", STR_PAD_BOTH);
// Output: -=-hello-=-
// str_repeat: This function repeats a string a specified number of times.
echo "\n===========================\n";

$string = "hello";
echo str_repeat($string, 3);
// Output: hellohellohello
echo "\n===========================\n";

// addslashes: This function adds backslashes to a string. 
//It can be used to escape characters in a string that have a special meaning in PHP, such as quotes and backslashes.

$string = "I'm a 'developer";
echo addslashes($string);
echo "\n===========================\n";

// Output: I\'m a developer
// stripslashes: This function removes backslashes from a string that were added by the addslashes function.

$string = "I\'m a \developer";
echo stripslashes($string);
echo "\n===========================\n";

// Output: I'm a developer
// htmlentities: This function converts characters to their corresponding HTML entities.

$string = "<p>Hello, World!</p>";
echo htmlentities($string);
echo "\n===========================\n";

// Output: &lt;p&gt;Hello, World!&lt;/p&gt;
// html_entity_decode: This function converts HTML entities to their corresponding characters.

$string = "&lt;p&gt;Hello, World!&lt;/p&gt;";
echo html_entity_decode($string);
echo "\n===========================\n";

// Output: <p>Hello, World!</p>


// strip_tags: This function removes HTML and PHP tags from a string.

$string = "<p>Hello, World!</p>";
echo strip_tags($string);
// Output: Hello, World!