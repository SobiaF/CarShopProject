<?php
class Validator
{
    public int $alpha;
    public int $email;
    public int $url;
    public int $phone;

   public function __construct($alpha, $email, $url, $phone)
   {
       $this->alpha = $alpha;
       $this->email = $email;
       $this->url = $url;
       $this->phone = $phone;
   }

    private array $types = array("alpha"=>'alpha', "email"=>'email', "url"=>'url', "phone"=>'phone');
    private string $error;

   private function checkType($type): bool
   {
       if (array_search($type, $this->types))
       {
           return true;
       } else {
           $this->error = "This is the wrong type";
           return false;
       }
   }

   public function getError()
   {
       return $this->error;
   }

   public function ValidateUserDetails($userDetails)
   {
       foreach ($userDetails as $type => $value)
       {
           if ($this->checktype($type))
           {
               switch($type)
               {
                   case('alpha'):
                       $this->validateAlpha($value);
                       break;

                   case('email'):
                       $this->validateEmail($value);
                       break;

                   case('url'):
                       $this->validateUrl($value);
                       break;

                   case('phone'):
                       $this->validatePhone($value);
                       break;

                   default:
                       break;
               }
           } else {
               throw new Exception("Invalid type passed - please fix");
           }
       }
   }

   private function validateEmail($input)
   {
       $email = filter_var($input, FILTER_VALIDATE_EMAIL);
       if (!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
           $this->error = "$email is not a valid email address. Please try again";
           return false;
       } else {
           return $email;
       }
   }

   private function validateURL($input)
   {
       $url = filter_var($input, FILTER_VALIDATE_URL);
       if (!filter_var($url, FILTER_VALIDATE_URL))
       {
           $this->error = "$url is not a valid URL. Please try again";
       } else {
           return $url;
       }
   }

   private function validatePhone($input)
   {
       if (!preg_match("/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/"))
       {
           $this->error = "Please input a valid UK number in the right format";
           throw new Exception("Please input a valid UK number in the right format");
       }
   }

   private function validateAlpha($input)
   {
       if ($GLOBALS['debug'])
       {
           echo "Validating alpha. Input value:" . $input . "<br>";
       }
       return filter_var($input, htmlspecialchars(""));
   }

   public function getValidTypes()
   {
       foreach ($this->types as $key => $value)
       {
           echo $key . "-" . $value . "<br>";
       }
   }
}
