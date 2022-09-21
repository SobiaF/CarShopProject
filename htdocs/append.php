<?php
// writing / appending in file sessions.txt
// need below to be cookies - research how
$userInfo = "\tuser_id1";
$userInfo  .="\tuser_id2";

$filename = 'sessions.txt';
$filestream = fopen('session.txt' , 'a')
or die('Unable to open file');

fclose($filestream);
