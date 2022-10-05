<?php
require_once("ValidatorClass.php");
$DEBUG = 1;
$validator = new Validator();
$validator->getValidTypes();

if (!empty($_POST['username']))
{
    $username = trim($_POST['username']);
    if ($GLOBALS['DEBUG'])
    {
        echo "loginValidation - username:" . $username . "<br>";
    }
    $username = $validator->validate($username, alpha);
    if (!username)
    {
        echo "There was an error with the input:" . $validator->getError() . "<br>";
        return;
    }
    echo "Please add a valid username" . $username "<br>";
}
