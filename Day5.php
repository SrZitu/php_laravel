<?php
// 1 to 100 print through for loop 
//for($i=1;$i<100;$i++){
   //if($i%7==0) echo "$i". "\n"; 
   //if($i%11==0) echo "$i". "\n"; 
//}
echo "Multiple Steping loop";
//If we use multiple step
for($i=0,$j=0;$i<100;$i+=7,$j+=11){
    echo "$i". "\n"; 
    echo $j<100? $j . "\n": ""; 
}

//++ in while loop
echo "While Loop ++ Examples.\n";
echo "++++++++++++++++\n";
$i=0;
while($i++<5){//0,1,2,3,4  i=1,i=i+1
    echo $i ."\n"; //1,2,3,4,5
}
echo "++++++++++++++++\n";
$j=0;
// j=j+1,j=j so for 0 it becomes 1 and test if 1<5 and so on...
while(++$j<5){
    //1,2,3,4
    echo $j ."\n"; 
}
echo "Break and  continue test......\n";

//continue and break in loop
// The break and continue both are used to skip the iteration of a loop. 
// These keywords are helpful in controlling the flow of the program. 
// The break statement terminates the whole iteration of a loop whereas continue skips the current iteration.
echo "Break\n";
for($n=18;$n<50;$n++){
    if($n%13==0){
     
      break;
    }
    echo $n . "\n";
  
  }
  echo "Continue statement\n";
for($n=20;$n<30;$n++){
  if($n<27){
    continue;
  }
  //the program control repeatedly went to the loop until the condition is satisfied.
  //when the condition is break then this $n will be printed.
  echo $n . "\n";

} 

//Fibbonacci Series (i tried it with recursive function)
function fibbo($num){
    if($num==0)
    {
        return 0;
    }
  
    else if($num==1||$num==2){
        return 1;
    }
   
    else
    return fibbo($num-1)+fibbo($num-2);

}
echo "Fibbonacci series of 8\n";
for($i=0;$i<=8;$i++){
   printf("%d\n",fibbo($i));
}

//***********Spaceship Operator******** */
$x=10;
$y=11;
function greaterSmaller($x,$y){
  if($x>$y){
    return 1;
    }else if($x==$y){
      return 0;
    }else{
      return -1;
    }
}
if(greaterSmaller($x,$y)==1){
  echo "{$x} is greater than {$y}\n";
}else if(greaterSmaller($x,$y)==0){
  echo "{$x} is Equal to {$y}\n";
}else{
  echo "{$x} is less than {$y}\n";
}

//We can do the avobe task using php7 spaceship operator
$result=$x<=>$y;
if($result==1){
  echo "{$x} is greater than {$y}";
}else if($result==0){
  echo "{$x} is Equal to {$y}";
}else if($result==-1){
  echo "{$x} is less than {$y}";
}
// In PHP 7, a new feature, null coalescing operator (??) has been introduced. 
// It is used to replace the ternary operation in conjunction with isset() function. 
//The Null coalescing operator returns its first operand if it exists and is not NULL;
//  otherwise it returns its second operand.
echo "\nNull Coalescing Operator\n";
$default_lat=12.3;
$default_long=90.5;
$user_lat=3;
//if $user_lat is set then it returns $user_lat or it return $defualt_lat
$lat=$user_lat??$default_lat;
echo $lat;