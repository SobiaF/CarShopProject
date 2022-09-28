
<!DOCTYPE html>
<html lang ="en">
<head>
<title>Sessions</title>
</head>
<body>
<?php
   session_start();

   if (!isset($_SESSION['visits']))
   {
       $_SESSION['visits'] = 1;
   } else {
       $_SESSION['visits']++;
   }

   echo 'The value of $_SESSION is: ' . $_SESSION['visits'] . "<br>";
?>
</body>
</html>
