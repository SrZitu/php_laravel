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

//Associative Array
echo "********Associative Array*****\n";
$computer_accesries = [
    'processor' => "Amd Ryzeen, Intel core i7",
    'motherboard' => "Am4 Socket",
    'ram' => "patroit"
];
//echo $computer_accesries['processor']; single element print using key
//using foreach operator to print asssociative array is most useful
foreach ($computer_accesries as $key => $value) {
    echo $key . "=" . $value . "\n";
}

//Another way of displaying associative array
echo "\n***Another way of displaying associative array***\n";
$keys = array_keys($computer_accesries);
$cnt = count($keys);
for ($i = 0; $i < $cnt; $i++) {
    $key = $keys[$i];
    echo $computer_accesries[$key] . "\n";
}

echo "\n***Another way of displaying associative array***\n";
$values = array_values($computer_accesries);
$cnt = count($values);
for ($i = 0; $i < $cnt; $i++) {
    $value = $values[$i];
    echo $value . "\n";
}
//string to Array Conversion and Array to String
//',' is called delimeter
$convrsn = explode(',', 'messsi,ronaldo, neymar, luka, gakpo, lisandro'); //string to arry conversion
print_r($convrsn);
$convrnToString = join(',', $convrsn); //arrto string conversion using join
print_r($convrnToString);

//multi dimensional or nested array
echo "\n***Multi dimensional Array***\n";
$stars = [
    'star1' => explode(',', 'rondadinho,mbappy,Benzema,Musiala'),
    'star2' => explode(',', 'salman,amir,srk,sahid'),
    'star3' => explode(',', 'rohit,sachin,mustafiz,AB'),

];
print_r($stars);
array_push($stars['star1'], 'Lionel Messi'); //adding an element into array
print_r($stars);
echo $stars['star3'][3];

echo "\n***Multi dimensional Array sample***\n";
$sample = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7]]
];
print_r($sample);
echo $sample[3][3][1];   //showing 3 no,3 no colomun and 1 no element which is 6


//conversion of associative array to string
echo "\n************************************\n";
echo "\n**conversion of associative array to string**\n";
$student = array(
    'fname' => 'Jamal',
    'lname' => 'musiala',
    'roll' => '14',
    'age' => '28'
);
print_r($student);
echo $student['fname'] . " " . $student['lname'] . "\n"; //one way to print 
printf("%s %s \n", $student['fname'], $student['lname']); //another efficient way to print
$serialized = serialize($student); //arry to string cnvrt using serialized
echo $serialized;
echo "\n";
$newstudent = unserialize($serialized);  //now string to array conversion
print_r($newstudent);

$jsondata = json_encode($student);  //converting array to string using json
echo $jsondata . "\n";
$studentup = json_decode($jsondata, true); //true dwar karone decode korar pore object ta array hoise
print_r($studentup);

/*Deep copy stores copies of the object’s value.
Deep copy doesn’t reflect changes made to the new/copied object in the original object.*/
$person = array('fname' => 'Sazzadur', 'lname' => 'Rahman');
$newperson = $person;
$newperson['lname'] = 'zitu';
print_r($person);   //original value is unchanged
print_r($newperson);  //copy by value

/*Shallow Copy stores the references of objects to the original memory address.   	
Shallow Copy reflects changes made to the new/copied object in the original object.	*/
function printData(&$person)
{
    $person['fname'] .= " changed";  //shallow copy
    print_r($person);
}
printData($person);
print_r($person); //original value is also changed

//Roving data from associative array
$person2 = array('fname' => 'Sakibur', 'lname' => 'Rahman');
print_r($person2);
echo "****After removing Array Element***\n";
unset($person2['lname']);
print_r($person2);

//Discussion About empty value
$name = 4;
if (isset($name)) {
    echo "Name is set\n";
} else {
    echo "Name is not set\n";
}
if (empty($name)) {
    echo "Name is empty\n";
} else {
    echo "Name is not empty\n";
}
if (isset($name) && (is_numeric($name) || $name != '')) {
    echo "name is set and it's not empty";
} else {
    echo "name  is either not set or it's empty";
}

//Extract some part of the array
//slice  used to get a new array by selecting a sub-array of a given array
//The changes do not reflect in the original array.
$fruits = array('apple', 'banana', 'guava', 'orange', 'malta', 'grapes');

//$somefruits=array_slice($fruits,2); //takes 0 index to last index
//$somefruits=array_slice($fruits,2,2); //2 index theke suru kore 2 ta print
//$somefruits=array_slice($fruits,-5,-1);  //-1 means last er ager ta 
$somefruits = array_slice($fruits, 3, 3, true);  //true dewar karone real index show korbe
print_r($somefruits);

//slice with associative array
echo "******Slice in associative array*****\n";
$random = array('a' => 12, 'b' => 13, 'c' => 14, 'd' => 15, 21 => 16, 'f' => 17);
$splcRandom = array_slice($random, -4, -1, true); //true dewar karone integer 21 key keo dekasse
print_r($splcRandom);

//Array Splice
//This method is used to add/remove an item from the given array.
//The changes reflect in the original array
$newfruits = array('papeya', 'lichi', 'boroi', 'orange', 'banana', 'berry');
$student_one = array(
    "Maths" => 95, "Physics" => 90,
    "Chemistry" => 96, "English" => 93,
    "Computer" => 98
);
//$SpiceStudent=array_splice($student_one,1,true); //show all value except 1 no index
$addNewvalue = array('jackfruit', 'lemon');
$Spicenewfruit = array_splice($newfruits, -5, -1, $addNewvalue);
print_r($Spicenewfruit); //akhnkar gulo original array te bad pore gese
print_r($newfruits); //new gulo original array te add hoye gese
