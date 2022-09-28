<!DOCTYPE html>
<html lang ="en">
<head>
    <title>Checking HTTP User Agent</title>
</head>
<body>
<?php
   session_start();

    if (isset($_SESSION['HTTP_USER_AGENT']))
    {
        if ($_SESSION['HTTP_USER_AGENT'] != md5($_SESSION['HTTP_USER_AGENT']))
        {
            exit;
        }
        else
        {
            $_SESSION['HTTP_USER_AGENT'] = md5($_SESSION['HTTP_USER_AGENT']);
        }
    }

?>
</body>
</html>
