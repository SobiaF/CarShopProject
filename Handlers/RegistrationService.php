<?php

include 'Controllers/Validator.php';
require  'signupPage.html';

class RegistrationService
{
    public function register(array $userRegDetails)
    {
        if ($userRegDetails == true)
        {
            header('Location: /');
            exit();
        }
        Return false;
    }
}
