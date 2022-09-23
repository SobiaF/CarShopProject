<?php session_start(); ?>

<?php
public function kill_session()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    session_destroy();
    echo '<hr>Session Destroyed<br>';
    echo 'Session ID: '.session_id().'<br>';
//    var_dump($_SESSION);
}
if (count($_SESSION) > 0)
{
    echo '<dl>';
    foreach($_SESSION as $key => $value)
    {
        echo "<dt>Key: $key";
        echo "<dd>Value: $value";
    }
    echo '<dl><hr>';
    echo 'Session ID: '.session_id().'<br>';
    var_dump($_SESSION);
    kill_session();
} else {
    echo 'Please <a href="session_form.html">Login</a>';ß
}