<?php
//Array in php
$students = array(
    "Sakib",
    "Tamim",
    "musfiq"
);

$students[3] = "ziad";
$show = count($students);
for ($i = 0; $i < $show; $i++) {
    echo $students[$i] . "\n";
}
echo "********After POP*****\n";
$update = array_pop($students); //pop array last element
$show = count($students);
for ($i = 0; $i < $show; $i++) {
    echo $students[$i] . "\n";
}

echo "********After Array Shift*****\n";
$update = array_shift($students); //pop array first element
$show = count($students);
for ($i = 0; $i < $show; $i++) {
    echo $students[$i] . "\n";
}
echo "********After Array Push*****\n";
$students[] = "Sazzad";   //add an element to the array last index
array_push($students, "Shahriar");  //another way to add an element to the array last index
$show = count($students);
for ($i = 0; $i < $show; $i++) {
    echo $students[$i] . "\n";
}

echo "********After Array Unshift*****\n";
array_unshift($students, "Saad");  //add an element to the array first index
$show = count($students);
for ($i = 0; $i < $show; $i++) {
    echo $students[$i] . "\n";
}
