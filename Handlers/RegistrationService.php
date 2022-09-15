<?php

include 'Controllers/Validator.php';
require  'signupPage.html';

class RegistrationService
{
    public function register(array $userRegDetails)
    {
        if ($userRegDetails == true)
        {
            return '/signupPage.html';
        }
        Return "Error cannot sign-up due to issues. Please try again later";
    }
}
