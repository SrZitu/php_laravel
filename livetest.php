<?php
$marks=76;
if($marks>=60){
    echo "The grade is first division";
}
else if ($marks>45 && $marks<59)
{
    echo "The grade is 2nd division"; 
}
else if ($marks>33 && $marks<44){
    echo "The grade is 3rd division"; 
}
else{
    echo "Fail"; 
}
// calculating gcd module 3 live test
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}


$gcd=gcd(12,18);
echo $gcd;