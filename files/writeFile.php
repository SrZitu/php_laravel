<?php
$filename = "C:/xampp/htdocs/php-laravel/files/writeData.txt";
$existing_Data = file_get_contents($filename); //returning all data as string
$fp = fopen($filename, 'w');
fwrite($fp, $existing_Data); //writting previous data
//fwrite($fp,"Html\n"); 
fwrite($fp, "css\n");
fwrite($fp, "Go\n"); //avabe write korle age data thakle seta remove hoye jay r new gulo save hoy

//to remove this problem we use "a" instead of "w" in the second peramerter
$fp = fopen($filename, 'a'); //append dile ager filer por a baki gulo add hbe
fwrite($fp, "JS\n");
fwrite($fp, "Bootstrap\n");


// Write to a file using file_put_contents()
$data = "Hello append test put content";
//file_put_contents("$filename", $data);  //age ja e thakuk na keno ata write hoye jbe file a
//file_put_contents("$filename", $data,FILE_APPEND);//append dile ager gulor sesh a write hbe
fclose($fp);