<?php
/* ============================================================================================================
problem 1. Write a function that takes a string as input and returns the number of vowels in the string. 
Use the strlen(), strtolower(), and substr() functions to process the string.
 ==============================================================================================================*/
function showVowels($string)
{
    $count = 0;
    $string = strtolower($string);
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $length = strlen($string);
    for ($i = 0; $i < $length; $i++) {
        if (in_array(substr($string, $i, 1), $vowels)) {
            $count++;
        }
    }
    return $count;
}
$vowelCount = showVowels("Aaeiou ki jinish eoo!");
echo "Number of vowels are:" . $vowelCount;
echo "\n===========================\n";

/* ============================================================================================================
Write a function that takes a string as input and returns the string with all vowels replaced by the character "x".
 Use the str_replace() and strtolower() functions to process the string.
 ==============================================================================================================*/
function replaceVowels($string)
{
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $string = strtolower($string);
    foreach ($vowels as $vowel) {
        $string = str_replace($vowel, 'x', $string);
    }
    return $string;
}
$replacedVowel = replaceVowels("A quick brown fox jumps over the lazy dog");
echo "vowels replaced with x:" . $replacedVowel;
echo "\n===========================\n";

/* =============================================================================================================
 Write a function that takes a string as input and returns the string with all words in reverse order.
 Use the explode(), array_reverse(), and implode() functions to process the string.
 ===============================================================================================================*/
function wordReverse($string)
{
    $strToArray = explode(' ', $string);
    $reverse = array_reverse($strToArray, true);
    $reversed_string = implode(" ", $reverse);
    return $reversed_string;
}

echo  $sentence = wordReverse("I 23 love my 33 motherland 43 hi");
echo "\n===========================\n";

/* =============================================================================================================
 Write a function that takes a string as input 
 and returns the number of times the word "PHP" appears in the string.
 ===============================================================================================================*/
function countPhp($string)
{
    return substr_count(strtolower($string), 'php');
}

echo "no of php are:" . countPhp("Hello this is a php from zitu's php.php learning is fun");
echo "\n===========================\n";

/* =============================================================================================================
  Write a function that takes a string as input 
  and returns a new string that consists of the first and last two letters of the input string.
 ===============================================================================================================*/
function letterSHowString($string)
{
    $length = strlen($string);
    if ($length <= 4) {
        return $string;
    } else {
        return substr($string, 0, 2) . substr($string, -2);
    }
}

echo "first and last two letters of string:" . letterSHowString("hello sazzad how are you?");
echo "\n===========================\n";
/* =============================================================================================================
  Write a function that takes a string as input 
  and returns the string with all occurrences of the substring "not" removed.
 ===============================================================================================================*/

function removeSubstring($string)
{
    return str_replace('not', '', $string);
}
echo "After removing not from string:" . removeSubstring("I am not a robot. I do not work restlessly.");
echo "\n===========================\n";

/* =============================================================================================================
 Write a function that takes two strings as input and returns a new string that 
 consists of the first half of the first string concatenated with the second half of the second string.
===============================================================================================================*/
function concatHalf($string1, $string2)
{
    $length1 = strlen($string1);
    $length2 = strlen($string2);
    $firstStrHalf = floor($length1 / 2);
    $secondStrHalf = ceil($length2 / 2);
    //range thik na kore dile joto theke suru hobe tar por theke sob dekhabe
    return substr($string1, 0, $firstStrHalf) . substr($string2, $secondStrHalf);
}
echo "1st half of first string and last half of 2nd:" . concatHalf("sazzadur", "Rahman");
echo "\n===========================\n";

/* =============================================================================================================
 // Write a function that takes a string as input and returns a new string with all vowels removed.
===============================================================================================================*/
function removedVowelString($string)
{
    return preg_replace('/[aeiou]/i', '', $string);
}
echo "After removing vowels from string::" . removedVowelString("sazzadur Rahman zitu");
echo "\n===========================\n";
/* =============================================================================================================
Write a function that takes a string as input and returns the reverse of the string.
===============================================================================================================*/
function stringReverse($string)
{
    return strrev($string);
}
echo "After Reversing string::" . stringReverse("sazzadur Rahman zitu");
echo "\n===========================\n";
/* =============================================================================================================
 Write a function that takes a string as input 
 and returns the string with the first letter of each word capitalized.
===============================================================================================================*/
function capitalized($string)
{
    return ucwords($string);
}
echo "After Capitalized first Alphabet string::" . capitalized("sazzadur rahman zitu");
echo "\n===========================\n";

/* =============================================================================================================
 Write a function that takes a string as input 
 and returns the string with the first letter of each word capitalized.
===============================================================================================================*/
function alternate_strings($string1, $string2)
{
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $maxlen = max($len1, $len2);
    $result = '';
    for ($i = 0; $i < $maxlen; $i++) {
        if ($i < $len1) {
            $result .= $string1[$i];
        }
        if ($i < $len2) {
            $result .= $string2[$i];
        }
    }
    return $result;
}

echo alternate_strings("bangladesh", "sylhet");

/* =============================================================================================================
rite a function that takes a string as input 
and returns the string with all characters replaced by the ASCII value of the character.
===============================================================================================================*/
function convertAsci($string)
{
    $result = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $result .= ord($string[$i]) . ' ';
    }
    return trim($result);
}
echo "After string to Ascii value:" . convertAsci("sAzzadur Rahman zitu");
echo "\n===========================\n";
