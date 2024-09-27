<?php

$myfile = fopen("url.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("url.txt"));
fclose($myfile);

?>

