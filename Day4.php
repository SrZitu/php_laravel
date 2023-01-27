<?php
//switch case
$favcolor="pink";
switch($favcolor){
    case 'red':
    case 'pink':
    echo "My favourite color is $favcolor \n";
    break;
    case 'green':
        echo "My favourite color is $favcolor \n";
        break;
   
    case 'blue':
        echo "My favourite color is $favcolor \n";
        break;
    case 'default':
            echo "My favourite color is none of this \n";
        break;
}
//nested switch case
$n=12;
switch(true){
    case ($n%2==0 && $n>0):
        echo "$n is an Positive Even Number\n";
        break;
    case ($n%2==0 && $n<0):
        echo "$n is an Negative Even Number\n";
        break;
    case ($n%2==1 && $n>0):
        echo "$n is an Positive Odd Number\n";
        break;
    case ($n%2==-1 && $n<0):
        echo "$n is an Negative odd Number\n";
        break;
}
//sometime if a number is seen in the case then it evaluates that number rather than entire string
$strng="8balls";
switch($strng){
    case "9balls":
        echo "there is 9balls";
        break;
    case 8:
        echo "there is 8";
        break;
    case "8balls":
        echo "there is 8balls\n";
        break;
            }
//Operator Presedence
$f=false||true;   //|| heigher presedence than or
$F=false or true; //$F=false assign hoye jay agei so porer true kono kaj e korena
var_dump($f,$F);

//Alternate Control Structure Format

if($n%2==0){
    echo "Even Number";
}else{
    echo "Odd number";
}
echo PHP_EOL;
//alternate structure
if($n%2==0):
    echo "Even Number";
    echo PHP_EOL;
    echo "some text+\n";
//else if  (true):   avabe aro condition dewa jeto
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "some text++";
endif;  //sesh a end kore dite hoy jeta start korbo seta
echo PHP_EOL;
//alternate switch thik moto kaj korsena
$num=13;
switch ($num%2==0):
     case 0:
        echo "Even number";
        break;
    default:
        echo "Odd Number";
        
    endswitch;
    echo PHP_EOL;
    
    // php jekono jaygay suru and sesh kora jay and normal text lekha jay,Html a ata onk kaj a day
    $num=12;
 if($num%2==0):
    ?>
 Even Number
 Another way
    <?php
else:
        ?>
Odd Number
Odd text
    <?php
    endif;
// Loops

for($i=1;$i<10;$i++){
    Echo PHP_EOL;
    for($j=0;$j<$i;$j++){
        echo "*";
    }
}
echo PHP_EOL;
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}
echo "Do While".PHP_EOL;
$i=0;
do{
    $i++;
    echo $i.PHP_EOL;

}while($i<10);

//Goto
echo "Goto".PHP_EOL;
$i=0;
a:$i++;
echo "$i";
echo PHP_EOL;
if($i<10) goto a;
echo PHP_EOL;

for($z=10, $k=1; $z>0; $z--,$k++){
    echo $z .":" .$k;
   // echo $z .":" .(11-$z);
    echo PHP_EOL;
}
//Factorial with for loop
$facNum=6;
$fact=1;
for($f=1;$f<=$facNum;$f++){
    //$sum=$sum*$f;
    $fact*=$f;
}
printf("Factorial of {$facNum} is:%d",$fact);