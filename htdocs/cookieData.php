<?php
if (count($_COOKIE) > 0)
{
    echo '<dl>';
    foreach($_COOKIE as $key => $value)
    {
        echo "<dt>Key: $key";
        echo "<dd>Value: $value";
    }
    echo '</dl><hr>';
//    var_dump($_COOKIE);
} else {
    echo 'Please <a href="cookieForm.html">Login</a>';
}
