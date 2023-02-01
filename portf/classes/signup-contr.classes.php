<?php
session_start();
class SignupContr{
    private $firstname;
    private $lastname ;
    private $email;
    private $password1;
    private $password2;  
    private $county;
    public function __construct($firstname, $lastname, $email, $password1, $password2, $county)
    {
        $this->firstname =$firstname;
        $this->lastname =$lastname;
        $this->email =$email;
        $this->password1 =$password1;
        $this->password2 =$password2;
        $this->county =$county;   
    }
    public function signupUser()
    {
        if($this->emptyInput()==false)
        {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->passwordLength()==false)
        {
            header("location: ../signup.php?error=passwordlength");
            exit();
        }
        if($this->passwordMatch()==false)
        {
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if($this->invalidEmail()==false)
        {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if($this->emailTakenCheck()==false)
        {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        $signup = new Signup();
        $signup->setUser($this->firstname,$this->lastname,$this->email,$this->password1,$this->password2,$this->county);
    }
    private function emptyInput()
    {
        if ($this->firstname == "" || $this->lastname == "" || $this->email == "" || $this->password1 == "" || $this->password2 == "")
        {
        //inputok alá
        if($this->firstname == "")
        {
        $_SESSION['firstname'] = "Kötelező!";
        }
        if($this->lastname == "")
        {
        $_SESSION['lastname'] = "Kötelező!";
        }
        if($this->email == "")
        {
        $_SESSION['email'] = "Kötelező!";
        }
        if($this->password1 == "")
        {
            
            $_SESSION['password1'] = "Kötelező!";
        }
        if($this->password2 == "")
        {
            $_SESSION['password2'] = "Kötelező!";
        }
        
        //legfelül értesítés
        $_SESSION['error'] = "A megadott adatok hiányosak!";
        return false;
        }
        else
        {
            return true;
        }
    }
    private function passwordLength()
    {
        if (strlen($this->password1) < 6 || strlen($this->password2) < 6) 
        {
            
            $_SESSION['password1'] = "A jelszó túl rövid. Legalább 6 karakter hosszúnak kell lennie.";
            $_SESSION['password2'] ="A jelszó túl rövid. Legalább 6 karakter hosszúnak kell lennie.";
            return false;
        }
        else
        { 
            return true;
        }
    }
    private function passwordMatch()
    {
        if ($this->password1 != $this->password2)
        { 
            
            $_SESSION['error'] = "Nem egyeznek a jelszavak";
            $_SESSION['password1'] = "Nem egyeznek a jelszavak";
            $_SESSION['password2'] ="Nem egyeznek a jelszavak";
            return false;
        }
        else
        {
            return true;
        }
    }
    private function invalidEmail()
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            
            $_SESSION['error'] = "Megadott email formátum rossz";
            $_SESSION['email'] = "Megadott email formátum rossz";
            return false;
        }
        else
        {
            return true;
        }
    }
    private function emailTakenCheck()
    {
        $signup = new Signup();
        if ($signup->checkEmail($this->email))
        { 
            
            $_SESSION['error'] = "Az email cím már használatban van";
            $_SESSION['email'] = "Az email cím már használatban van";
            return false;
        }
        else 
        {
            return true;
        }
    }

}