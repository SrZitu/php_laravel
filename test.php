<?php

    $i=10;
   // printf("%d %d %d\n",$i,++$i,$i++);
    printf("%d %d %d %d %d",$i++,++$i,++$i,$i++,++$i);

 function $fun($x,$y){
    if($x==0) return $y;
    return $fun($x-1,$x+$y);
}
printf("%d %d",$fun(3,4));