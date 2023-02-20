<?php

$original="abcdefghijklmnopqrstuvwxyz1234567890";
$parts=str_split($original);
shuffle($parts);
$key=join('',$parts);
echo $key;
