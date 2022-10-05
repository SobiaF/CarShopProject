<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title>Php Practice</title>
</head>
<body>
   <form id="login" action="loginValidation.php" method="post" accept-charset="UTF-8"></form>
   <label for="username">Username</label>
   <input name="username" id="username" maxlength="50"/> <br>
   <label for="email">Email</label>
   <input name="email" id="email" maxlength="50"/> <br>
   <label for="website">Website</label>
   <input name="website" id="website" maxlength="50"/> <br>
   <label for="phone">Phone</label>
   <input name="phone" id="phone" maxlength="50"/> <br><br>
   <input type="submit" name="submit" value="submit"/>
   <?php
      require_once("loginValidation.php");
   ?>
</body>
</html>