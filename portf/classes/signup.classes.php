<?php

class Signup extends Dbh
{

    public function setUser($firstname, $lastname, $email, $password1, $password2, $county)
    {
        $password = password_hash($password1, PASSWORD_DEFAULT); //jelszó kódolás
        $sql = "INSERT INTO regisztracio values (DEFAULT, :firstname, :lastname, :password, :email, :county);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':county', $county);
        $stmt->execute();
        $stmt =null;
    }

    public function checkEmail($email)
    {
        $sql = "SELECT email FROM regisztracio WHERE email = :email;";
        $stmt =$this->connect()->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(); //fetch() - az eredmény lekérdezése, ha van az adatbázisban ilyen adat akkor True ha nincs False
        return $result;
    }

}