<?php
$filename = 'cheese.txt';
$file = fopen($filename, 'r') or die('No such file exists');
echo fread($file, filesize($filename)) . '<br>';
//echo fgets($file) . '<br>';
echo 'Should I use single or double quotes? <br>';
fclose($file);
 ?>
