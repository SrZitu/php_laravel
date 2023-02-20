<?php

function largeWord($str){
    $arr =  explode(' ',$str);
  $value = $arr[0];
  foreach($arr as $key=>$val){
    if(strlen($value)<=strlen($val)){
      $value = $val;
    }

  };
  return $value;
  }
  $str = 'The quick brown fox jumped over the lazy dog';
  
echo largeWord($str);