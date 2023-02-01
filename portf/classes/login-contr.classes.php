<?php
session_start();
class LoginContr{
    
    private $email;
    private $password;
    
    public function __construct( $email, $password)
    {
        $this->email =$email;
        $this->password =$password;
     
    }
    public function loginUser()
    {
        if($this->emailFormat()==false)
        {
            header("location: ../login.php?error=emailformat");
            exit();
        }
        $login = new Login();
        $login->getUser($this->email,$this->password);
    }
    private function emailFormat()
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['loginErr'] = "Megadott email formátum rossz";
            return false;
        }
        else{
            return true;
        }
    }
    
}