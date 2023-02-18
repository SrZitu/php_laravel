<?php
//1.Problem: Sort an array of student names by their average test scores, in descending order:
$students = array(
  "Zitu" => array(74, 75, 80),
  "Zisan" => array(89, 85, 81),
  "Ziad" => array(85, 94, 82),
  "Sazzad" => array(98.9, 96, 94),
);

//calculting average test score for each student
foreach ($students as $name => $marks) {
  $arry_sum = array_sum($marks);
  $count = count($marks);
  $avg_score = $arry_sum / $count;
  $students[$name]['avg_score'] = $avg_score;
}
// print_r($students);

//  Sort the students by their average scores, in descending order

uasort($students, function ($a, $b) {
  return  $b['avg_score'] - $a['avg_score'];
});
// print_r($students);

//Output of the sorted list
foreach ($students as $name => $data) {
  echo $name . ": " . $data['avg_score'] . "\n";
}
// ==============================================
// ==============================================
// 2.Problem:Remove all words that start with a vowel from a sentence:

$sentence = "The quick brown fox jumps over the lazy dog";

//dividing the string into array of words
$words = explode(" ", $sentence);
print_r($words);

//Filtered the matched 

$filtered_array = array_filter($words, function ($words) {
  return !preg_match('/^[aeiou]/i', $words);
});
print_r($filtered_array);

//converting arrray to string 
$resulted_sentence = implode(' ', $filtered_array);
echo $resulted_sentence;

// ==============================================
// ==============================================
// 3. Problem :Find the most common word in a sentence:

$sentence2 = "the quick brown fox jumps over the lazy lazy lazy dog";
$word = explode(" ", $sentence2);

$word_count = array_count_values($word);
print_r($word_count);

//sorting their values in decending order
arsort($word_count);
print_r($word_count);
//get the most common word
$most_common_word = array_keys($word_count)[0];
echo $most_common_word . "\n";

// ==============================================
// ==============================================
// 4.Problem :Remove all duplicate values from multiple arrays, and merge the unique values into a new array:

$fruits1 = array("apple", "banana", "orange");
$fruits2 = array("orange", "grape", "kiwi");
$fruits3 = array("apple", "pear", "kiwi");

// Merge the arrays and remove duplicates
print_r(array_merge($fruits1, $fruits2, $fruits3));
$unique_fruits = array_unique(array_merge($fruits1, $fruits2, $fruits3));
print_r($unique_fruits);

// ==============================================
// ==============================================
//5.Problem : Group an array of numbers into "odd" and "even" groups:

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

// Partition the array into odd and even numbers
$groups = array_reduce($numbers, function ($acc, $num) {
  if ($num % 2 == 0) {
    $acc['even'][] = $num;
  } else {
    $acc['odd'][] = $num;
  }
  return $acc;
}, array('odd' => array(), 'even' => array()));
print_r($groups);

// array reduce funtion doing sum
function addition($carry, $sum)
{
  return $carry += $sum;
}
$numbers2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$addition = array_reduce($numbers2, "addition");
var_dump($addition);

// ==============================================
// ==============================================
// 6.Problem: Find the most frequent item in an array of strings:

$colors = array("red", "blue", "green", "blue", "yellow", "red", "blue", "green", "green");

//Count the occurrence of each color
$count_color = array_count_values($colors);
print_r($count_color);

//Sort the colors by their count, in descending order
arsort($count_color);
print_r($count_color);
//Get the most frequent color
$most_frequent_color = array_keys($count_color)[0];
echo "{$most_frequent_color}";
echo PHP_EOL;
// =======================================================
// =======================================================
// 8.Problem: Find the intersection of multiple arrays of strings, i.e. the values that appear in all arrays:

$fruits1 = array("apple", "banana", "orange");
$fruits2 = array("orange", "apple", "grape", "kiwi","orange");
$fruits3 = array("apple", "pear", "kiwi","orange");

//Find the intersection of the arrays
//print_r(array_intersect($fruits1, $fruits2, $fruits3));
$common_fruits = call_user_func_array('array_intersect', array($fruits1, $fruits2, $fruits3));
print_r($common_fruits);

// =======================================================
// =======================================================
// 9.Problem :Flatten a multi-dimensional array into a single array of values:

$matrix = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

 // Flatten the matrix into a single array
$flat_array = array_merge(...$matrix); 

print_r($flat_array);