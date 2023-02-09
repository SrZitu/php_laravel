<?php
//Array Sum
$fruits=array('apple','banana','orange','plum','dates','mango');
$random=array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>33,12=>78,"g"=>87);

$newfruits1=array_slice($fruits,0,3); //0 theke sure hbe 2 index means 3 ghor nibe
$newfruits2=array_slice($fruits,3); //3 index to last pojonto print korbe

$newfruits=array_merge($newfruits1,$newfruits2); //merges array
print_r($newfruits);
// print_r($newfruits2);
// print_r($newfruits); 
echo "**Another way of merging array**\n";

$newfruits3=array_slice($fruits,0,3); //0 theke sure hbe 2 index means 3 ghor nibe
$newfruits4=array_slice($fruits,3,null,true); //null and true dewar real index passe,key preserved
$newfruitsPlus= $newfruits3+$newfruits4; //tai avbeo sum kora somvob hosse.
print_r($newfruitsPlus);

//Associcative array er khetre array slice key preserve kre
$r1=array_slice($random,0,2,true);
$r2=array_slice($random,4,null,true);
$r3=array("j"=>13,"k"=>14);

//splice changed my original array that's why it's showing  13 ,14 into index 2 and 3 respectively
//$randomData=array_splice($random,2,2,array("j"=>13,"k"=>14)); 
$randomDataCorrectway=$r1+$r2+$r3;// we can also use array_merge to do this
$randomDataCorrectway2=array_merge($r1,$r2,$r3);  //original index dekhassena knjni

echo "**MY Original Array**\n";
print_r($random);  //we can see the changed array beacuse of using array splice
echo "**using traditional way merge**\n";
print_r($randomDataCorrectway);
echo "**printing data using array merge **";
print_r($randomDataCorrectway2);

//array sort
$newfruits=array('papeya','lichi','boroi','orange','apple','banana','berry');

asort($newfruits);
print_r($newfruits);

$numbers = array(1,12,13,456,67,3,45); 

sort($numbers,SORT_STRING);  //1 er sathe jegulo match ogulo then 2 er sathe match avbe sort korbe
print_r($numbers);

foreach($numbers as $number){
    echo "$number\n";  //for each dara prottak ta number k print kore dekhassi
}

//Sorting with keys
$numbers2 = array(1,121,133,46,67,3,45); 
echo "sorting wrt keys\n";
//krsort($numbers2,SORT_STRING); //reverse sort wrto key
ksort($numbers2,SORT_STRING);
print_r($numbers2);
foreach($numbers2 as $number){
    echo "$number\n";  //for each dara prottak ta number k print kore dekhassi
}

/***********************Index and associative array search**************************
************************************************************************************/
$indexArry=array(12,134,5,6,787,2,4,90);
$asscoArry=array('a'=>12,'B'=>134,'c'=>34,'d'=>32,'e'=>43);
$indxSearch=in_array('12',$asscoArry,true); // true dile not found dekhabe 12 k jeta strick mode
if($indxSearch){
    echo "\nfound\n";
}else{
    echo "not found\n";
}

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key1 = array_search('green', $array); // $key = 2;
$key2 = array_search('red', $array);   // $key = 1;   key value return krse 
$offset=array_search(5,$indexArry);
echo $offset ."\n"; //5 ta koto index a ase seta show korse
var_dump($key1);
var_dump($key2);

// key exist kore kina seta check
if(key_exists('3',$array)){
    echo "\nkey  exists\n";
}else {
    echo "\n key not exist";
}

/***********************Array Intersection and difference**************************
************************************************************************************/
// Array intersect,Compare the values of two arrays, and return the matches:
$ary1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"ash");
$ary2=array("e"=>"red","f"=>"green","g"=>"gray",'d'=>"yellow","z"=>"pink");

//argument er vitor j array ta agey thakbe setar valur sathe match kore return korbe.
$aryintrsec1=array_intersect($ary1,$ary2);//returns red green blue of ary1
$aryintrsec2=array_intersect($ary2,$ary1);//returns red green blue of ary2
$aryintrsec3=array_intersect_assoc($ary1,$ary2);

print_r($aryintrsec1);
echo "\n**keeping the arry2 at first postion as parameter**\n";
print_r($aryintrsec2);
echo "\n**Compare with the key value also.and so we get**\n";
print_r($aryintrsec3);
$arydiffsec1=array_diff($ary1,$ary2);//returns red green blue of ary1
$arydiffsec2=array_diff($ary2,$ary1);//returns red green blue of ary2
$arydiffsec3=array_diff_assoc($ary1,$ary2);
echo "\n**keeping the arry1 at first postion as parameter**\n";
print_r($arydiffsec1);
echo "\n**keeping the arry2 at first postion as parameter**\n";
print_r($arydiffsec2);
echo "\n**Compare with the key value also.and so we get**\n";
print_r($arydiffsec3);

/***********************Utility Function(Array walk,map,filter)**************************
*The array_walk() function runs each array element in a user-defined function. 
The array's keys and values are parameters in the function.
**************************************************************************************************/
$aray=array(1,2,3,4,5,6,7,8,9,10);

function sqare($num){
  printf("Square of %d is %d \n",$num, $num*$num);
}


function cube($num){
    return $num*$num*$num;
}

function even($num){
   return $num%2==0;
}

$arrywalk=array_walk($aray,"sqare");
print_r ($arrywalk);

$arrymap=array_map("cube",$aray); //array map main array tar  copy ney then setar upor kaj kore
                                   //new resultant array output deey
print_r($arrymap);

//The array_filter() function filters the values of an array using a callback function.
$arryfilter=array_filter($aray,'even');
print_r($arryfilter);

$students=array(
    "Sakib",
    "Tamim",
    "musfiq","Sadman","Safiq"
  );
  function filterByS($num){
    return $num[0]=='S';
  }
  $arryfilterBys=array_filter($students,'filterBys');
print_r($arryfilterBys);

/************************************Array Reduce************************************
array_reduce — Iteratively reduce the array to a single value using a callback function
**************************************************************************************************/
$aray_r=array(1,2,3,4,5,6,7,8,9,10);
function sum($oldValue,$newValue){
   if($newValue%2==0){
    return $oldValue+$newValue;
   }
   return $oldValue;
}
$arry_reduce=array_reduce($aray_r,'sum');
print_r($arry_reduce);
/************************************list()************************************
The list() function is used to assign values to a list of variables in one operation.
**************************************************************************************************/

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 25
];

list(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'age' => $age) = $person;

printf("\nFirst name:$first_name \n last name:$last_name\n");

echo "\n";

list($buy_price, $tax) = array(100,0.1); //1 line ao kaj korte pari alda varible na niye

var_dump( $buy_price, $tax );

/************************************range()************************************
range() — Create an array containing a range of elements
range(low, high, step)
**************************************************************************************************/
echo "***Range Function***\n";
foreach(range(1,50) as $value){
    if($value%2==1 && $value>0){
        echo $value . "\n";
    }
 }

/************************************shuffle()************************************
The shuffle() function randomizes the order of the elements in the array.
**************************************************************************************************/
$newnumbers=range(1,50);
shuffle($newnumbers);
print_r($newnumbers);
$randomNumber=$newnumbers[3];
echo $randomNumber . "\n";
//creating random number using mt_rand() function
$random=mt_rand(1,30);
$luck=$newnumbers[$random]; // luck tester using mt_rand function
var_dump($luck);

if($luck%2==0){
    echo "Head\n";
}else{
    echo "Tail\n";
}

//Associative array te array shuffle chalile data loss hote pare.
//so we use array_rand() function to reserve the random key
//array_rand — Pick one or more random keys out of an array
$ary_rand_test=array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>33,12=>78,"g"=>87);
$key=array_rand($ary_rand_test); 
echo $key ."\n".$ary_rand_test[$key] ."\n";