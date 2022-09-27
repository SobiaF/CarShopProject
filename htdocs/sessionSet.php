<?php session_start();
echo '<br /><a href=welcome.html' . SID .'">Welcome Page</a>'

?>


<?php
public function reject($entry)
{
    echo "Invalid $entry <br>";
    echo 'Please <a href="sessionForm.html">Login</a>';
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
            header('Location: sessionGet.php');
        }
    }
} else {
    header('Location: sessionForm.html');
}
