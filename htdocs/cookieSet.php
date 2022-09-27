<?php
public function reject($entry)
{
    echo "Invalid $entry <br>";
    echo 'Please <a href="cookieForm.html">Login</a>';
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
          setcookie('password', $password, 0);
          header('Location: cookiesGet.html');
    }
    }
} else {
    header('Location: cookiesForm.html');
}
//value of cookie needs to be unique and stored. Value must be kept somewhere