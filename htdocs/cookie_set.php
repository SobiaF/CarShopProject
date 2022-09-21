<?php
public function reject($entry)
{
    echo "Invalid $entry <br>";
    echo 'Please <a href="cookie_form.html">Login</a>';
    exit();
}

if (isset($_POST['user']))
{
    $username = trim($_POST['username']);
    if (!ctype_alnum($username))
    {
        reject('username');
    }
    if (isset($_POST['password']))
    {
        $password = trim($_POST['password']);
        if(!ctype_alnum('password'))
        {
            reject($password);
        } else {
          setcookie('username', $username, 0);
          setcookie('0password', $password, 0);
          header('Location: cookies_get.html');
    }
    }
} else {
    header('Location: cookies_form.html');
}
