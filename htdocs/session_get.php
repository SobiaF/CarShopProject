<?php session_start(); ?>

<?php
if (isset($_SESSION['username']))
{
    $username =$_SESSION['username'];
    echo "<h1>Welcome $username</h1><hr>";
    echo '<a href="session_data.php">View Session</a>';
} else {
    echo 'Please <a href="session_form.html">Login</a>';
}
