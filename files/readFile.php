<?php

$filename = "C:/xampp/htdocs/php-laravel/files/data.txt";
$fp = fopen($filename, 'r');
while ($line = fgets($fp)) {
    echo $line;
}

/*==========================================================================================
The rewind() function in PHP is used to reset the file pointer to the beginning of a file 
opened using the fopen() function. This function is useful when we want to re-read the file from the beginning 
 or perform a new operation from the beginning of the file.

 bool rewind ( resource $filename )
==========================================================================================*/
rewind($fp);  //akta file k abar suru theke read er loop chalate chaile ata dite hbe


/*==================================================================================
The seek() function in PHP is used to 
move the file pointer to a specific position in a file opened using the fopen() function.
====================================================================================*/
//fseek($fp,7);  //7 no postion theke data read kora suru korbe
//fseek($fp,-30,SEEK_END); //last theke character read korte korte surur dike jbe 30 ch pojonto
while ($line = fgets($fp)) {
    echo $line;
}
fclose($fp);

/*=====================================================================================
The file() function in PHP is used to read a file and return its contents as an array.
=======================================================================================*/

$data = file($filename);
print_r($data);
/* ===================================================================================
file_get_contents() is a PHP function that is used to read the contents of a file 
and return them as a string. It takes a file path as its parameter 
and returns the contents of the file as a string.
=======================================================================================*/
$file_content = file_get_contents($filename);
echo $file_content;
