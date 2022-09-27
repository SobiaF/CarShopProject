<?php
// writing / appending in file sessions.txt
$userInfo = "\t[username, password]";

$filename = 'sessions.txt';
$filestream = fopen($filename , 'a')
or die('Unable to open file');

fclose($filestream);
