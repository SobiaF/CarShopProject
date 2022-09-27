<?php

Class Cookie
{
    public function manageCookie() {
        setcookie('loggedIn', 'user_id', 0);
        if ($_COOKIE['loggedIn'] == 'user_id') {
            session_start();
            echo '<br /><a href="welcome.html'. SID . '">Welcome Page</a>';
        } else {
            echo '<br /><a href="signupPage.html">Sign up here!</a>';
        }
    }
}
