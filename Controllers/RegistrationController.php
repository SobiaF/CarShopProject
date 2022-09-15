<?php
include 'Controllers/Validator.php';
include 'Handlers/RegistrationService.php';
// include php file for validation and registration
// then can use variable
// RegistrationController begins
// controller needs to do validation and registration and then re-direct them back to website
// define variables and set to empty values

$validator = new Validator();
$validator->validate($_POST);

if ($validator->validate($_POST)) {
   $registrationService = new RegistrationService();
   $registrationService->register($_POST);
}

$emailErr = $userErr = $passwordErr = $cpasswordErr = $firstErr = $lastErr = $teamErr = "";
$email = $username = $password = $cpassword = $firstname = $lastname = $teamname = "";

// The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validates email
    if (empty($_POST["email"])) {
        $emailErr = "You Forgot to Enter Your Email!";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "You Entered An Invalid Email Format";
        }
    }
    //Validates Username
    if (empty($_POST["username"])) {
        $userErr = "You Forgot to Enter Your Username!";
    } else {
        $username = test_input($_POST["username"]);
    }
    //Validates password & confirm passwords.
    if(!empty($_POST["password"]) && $_POST["password"] != "" ){

        if (strlen($_POST["password"]) <= '8') {
            $passwordErr .= "Your Password Must Contain At Least 8 Digits !"."<br>";
        }
        elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Number !"."<br>";
        }
        elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
        }
        elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
        }
        elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
            $passwordErr .= "Your Password Must Contain At Least 1 Special Character !"."<br>";
        }
    }else{
        $passwordErr .= "Please Enter your password"."<br>";
    }
    //Validates firstname
    if (empty($_POST["firstname"])) {
        $firstErr = "You Forgot to Enter Your First Name!";
    } else {
        $firstname = test_input($_POST["firstname"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $firstErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lastname"])) {
        $lastErr = "You Forgot to Enter Your Last Name!";
    } else {
        $lastname = test_input($_POST["lastname"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["teamname"])) {
        $teamErr = "You Forgot to Enter Your Team Name!";
    } else {
        $teamname = test_input($_POST["teamname"]);
    }
}
/*Each $_POST variable with be checked by the function*/
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// RegistrationController ends
