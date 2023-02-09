<?php
$marks=60;
if($marks>=60){
    echo "The grade is first division";
}
else if (45<$marks<59)
{
    echo "The grade is 2nd division"; 
}
else if (33<$marks<44){
    echo "The grade is 3rd division"; 
}
else{
    echo "Fail"; 
}