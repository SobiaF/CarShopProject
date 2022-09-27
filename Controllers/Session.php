<?php

class Session
{
    public function manageSession()
    {
        $has_session = session_status() == PHP_SESSION_ACTIVE;

        $filename = 'sessions.txt';
        $filestream = fopen($filename, 'r');
         echo ini_get('session.save_path')
             or die('Unable to open file');
         fclose($filestream);
         echo ini_get('session.save_path');
         ini_set('session.cookie_lifetime', 100);
         }
}
