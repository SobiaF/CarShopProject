<!DOCTYPE html>
<html lang ="en">
<head>
    <title>Sessions</title>
</head>
<body>
<?php
require_once ('getUserID.php');

   session_start();
   $_SESSION['username'] = "Sobia";

   $_SESSION['userId'] = getUserID($_SESSION['username']);

   echo "The current user is: " . $_SESSION['username'] . "userID: " . $_SESSION['userId']
       . $_SESSION['sessionid: '] . session_id();
?>
</body>
</html>
