<?php
/*  Patter No 1

* 
* * 
* * * 
* * * * 
* * * * * 

 */
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}

/*  Patter No 2 . reverse pyramid


* * * * * 
* * * * 
* * * 
* * 
* 

 */


 echo "Reverse Pyramid\n";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}



/*  Patter No 2

 1 
 2 2 
 3 3 3 
 4 4 4 4 
 5 5 5 5 5 

 */

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo PHP_EOL;
}

/*  Patter No 3

1 
1 2 
1 2 3 
1 2 3 4 
1 2 3 4  5 

 */

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo PHP_EOL;
}

