<?php
class Validator
{
    public function validate(array $userRegDetails): bool
    {
        if ($userRegDetails['email, username, password']){
        return true;
        }
        return false;
    }
}