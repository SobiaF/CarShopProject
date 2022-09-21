<?php

class Session
{
    public function manageSession() {
        setcookie('loggedIn', 'user_id', 0);
        if ($_COOKIE['loggedIn'] == 'user_id') {
            header('Location: /');
            session_start();
        }
    }
}