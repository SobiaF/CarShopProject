<?php
$fileWithUserData = fopen('sessions.txt', 'r')
or die('Unable to open session file');
echo fread($fileWithUserData, filesize('sessions.txt'));
fclose($fileWithUserData);