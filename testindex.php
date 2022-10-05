<?php
require_once("ValidatorClass.php");

$userDetails = ["alpha"=>'testing', "email"=>'test@test.com',
    "url"=>'www.testing.com', "phone"=>'=447000000000'];

$validator = new Validator();
$validator->validateUserDetails($userDetails);
