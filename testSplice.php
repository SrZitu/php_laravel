<?php
$random=array("a"=>12, "b"=>13, "c"=>14, "d"=>15, 21=>16, "f"=>17);
$splcRandom=array_splice($random, 1, null,true);
print_r($splcRandom);