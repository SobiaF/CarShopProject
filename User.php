<?php
require_once("getUserID.php");
class User
{
    protected string $username;
    protected string $password;
    protected int $userId;
    protected string $email;
    protected string $contactNumber;
    protected bool $buyCar;
    protected bool $sellCar;


    public function __construct(string $username, string $password, int $userId, string $email,
                                string $contactNumber, bool $buyCar, bool $sellCar)
    {
        $this->username = $username;
        $this->password = $password;
        $this->userId = $this->getUserID(); // should be like uuid / universalId - this way not reliant on db
        $this->email = $email;
        $this->contactNumber = $contactNumber;
//        $this->buyCar = $buyCar;
//        $this->sellCar = $sellCar;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function getUserID()
    {
        return $this->userId;
    }
}

//    public function buyCar($buyCar) {
//        if ($buyCar === true) {
//            // method logic to say if user buys logic then transaction starts
//        }
//        else if ($buyCar === false) {
//            return new ErrorException("Error no car selected. Please select car and try again");
//        }
//        else {
//            echo "There's an error. Please try again";
//        }
//    }
//
//    public function sellCar($sellCar) {
//        if ($sellCar === true) {
//            // method logic to say user is selling car
//        }
//        else if ($sellCar === false) {
//            return new ErrorException("Error no car selected. Please select car and try again");
//        }
//        else {
//            echo "There's an error. Please try again";
//        }
//    }
//}
