<?php
$filestream = fopen('sessions.txt', 'a+')
   or die('Unable to open session file');
echo fread($filestream, filesize('sessions.txt'));
fclose($filestream);
