<?php
if (isset($_COOKIE['username']))
{
    $username = $_COOKIE['username'];
    echo "<h1>Welcome $username!</h1>";
    echo '<a href="cookie_data.php">View Cookie</a>';
} else {
    echo 'Please <a href="cookie_form.html">Login</a>';
}
