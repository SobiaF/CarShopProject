<?php

class Session
{
    public function manageSession() {
        setcookie('loggedIn', 'user_id', 0);
        // The 0 at the end is to not have a time for the cookie to expire,
        // As this way if browser is closed then user is logged out
        if ($_COOKIE['loggedIn'] == 'user_id') {
            header('Location: /');
            session_start();
        }
    }
}