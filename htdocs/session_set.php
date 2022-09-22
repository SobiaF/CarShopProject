<?php session_start(); ?>


<?php
public function reject($entry)
{
    echo "Invalid $entry <br>";
    echo 'Please <a href="session_form.html">Login</a>';
    echo exit();
}

if (isset($_POST['username']))
{
    $username = trim($_POST['username']);
    if(!ctype_alpha($username))
    {
        reject('username');
    }
    if (isset($_POST['password']))
    {
        $password = trim($_POST['password']);
        // left unencrypted in this example to demonstrate that the user password
        // meets the specified requirements
        if (!preg_match('/^[A-Za-z0-9._]{8,}$/', $password))
        {
            reject('password');
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: session_get.php');
        }
    }
} else {
    header('Location: session_form.html');
}