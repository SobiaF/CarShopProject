<?php
require_once("ValidatorClass.php");
$DEBUG = 1;
$validator = new Validator();
//$validator->getValidTypes();

if (!empty($_POST['username']))
{
    $username = trim($_POST['username']);
    if ($GLOBALS['DEBUG'])
    {
        echo "LoginValidation - username:" . $username . "<br>";
    }
    $username = $validator->validate($username, alpha);
    if (!username)
    {
        echo "There was an error with the input:" . $validator->getError() . "<br>";
        return;
    }
    echo "Please add a valid username" . $username . "<br>";
}

if (!empty($_POST['email']))
{
    $email = trim($_POST['email']);
    if ($GLOBALS['DEBUG'])
    {
        echo "LoginValidation - email:" . $email . "<br>";
        return;
    }
    echo "Please add a valid email" . $email . "<br>";
}

if (!empty($_POST['url']))
{
    $url = trim($_POST['url']);
    if ($GLOBALS['DEBUG'])
    {
        echo "LoginValidation - url:" . $url . "<br>";
        return;
    }
    echo "Please add a valid website url" . $url . "<br>";
}

if (!empty($_POST['phone']))
{
    $phone = trim($_POST['phone']);
    if ($GLOBALS['DEBUG'])
    {
        echo "LoginValidation - phone" . $phone . "<br>";
        return;
        }
    echo "Please add a valid UK phone number in the right format" . $phone . "<br>";
    }
