<?php session_start(); ?>

<?php
if (isset($_SESSION['username']))
{
    $username =$_SESSION['username'];
    echo "<h1>Welcome $username</h1><hr>";
    echo '<a href="sessionData.php">View Session</a>';
} else {
    echo 'Please <a href="sessionForm.html">Login</a>';
}
