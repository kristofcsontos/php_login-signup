<?php
 session_start();

if(isset($_POST['register']))
{
    include 'connect.php';
    
    // Felesleges szóközök eldobása
    $firstname= trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password1= trim($_POST['password1']);
    $password2 = trim($_POST['password2']);  
    $county =$_POST['county'];
    // Ha hiányzik bemeneti adat.
    if ($firstname == "" || $lastname == "" || $email == "" || $password1 == "" || $password2 == "")
    {
        //inputok alá
        if($firstname == "")
        {
        $_SESSION['firstnameErr'] = "Kötelező!";
        }
        if($lastname == "")
        {
        $_SESSION['lastnameErr'] = "Kötelező!";
        }
        if($email == "")
        {
        $_SESSION['emailErr'] = "Kötelező!";
        }
        if($password1 == "")
        {
            
            $_SESSION['password1Err'] = "Kötelező!";
        }
        if($password2 == "")
        {
            $_SESSION['password2Err'] = "Kötelező!";
        }
        
        //legfelül értesítés
        $_SESSION['error'] = "A megadott adatok hiányosak!";
    }
    //jelszó hossza
    elseif (strlen($password1) < 6 || strlen($password2) < 6) {
        $_SESSION['password1Err'] = "A jelszó túl rövid. Legalább 6 karakter hosszúnak kell lennie.";
        $_SESSION['password2Err'] ="A jelszó túl rövid. Legalább 6 karakter hosszúnak kell lennie.";
    }
    //jelszó összehasonlitás
    elseif ($password1 != $password2)
    { 
        $_SESSION['error'] = "Nem egyeznek a jelszavak";
        $_SESSION['password1Err'] = "Nem egyeznek a jelszavak";
        $_SESSION['password2Err'] ="Nem egyeznek a jelszavak";
    }
    
    //email formátum ellenőrzés
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['error'] = "Megadott email formátum rossz";
        $_SESSION['emailErr'] = "Megadott email formátum rossz";
    }
    //Ha megfelelő adatok vannak bent az inputba
    else
    {
        try
        {
	         //bevitt email cím meglét vizsgálása az adatbázisban 
            $sql = "SELECT email FROM regisztracio WHERE email = :email";
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $result = $stmt->fetch(); //fetch() - az eredmény lekérdezése, ha van akkor True ha nincs False
            if ($result) 
            {
                $_SESSION['error'] = "Az email cím már használatban van";
                $_SESSION['emailErr'] = "Az email cím már használatban van";
            }
            else
            {
                //adatfelvitel az adatbázisba
                $password = password_hash($password1, PASSWORD_DEFAULT); //jelszó kódolás
                $sql = "INSERT INTO regisztracio values (DEFAULT, :firstname, :lastname, :password, :email, :county)";
                $sth = $dbh->prepare($sql);
                $sth->bindParam(':firstname', $firstname);
                $sth->bindParam(':lastname', $lastname);
                $sth->bindParam(':email', $email);
                $sth->bindParam(':password', $password);
                $sth->bindParam(':county', $county);
                $sth->execute();
                $_SESSION['success'] = "Sikeres regisztráció";
            }
        }
        catch(PDOException $e)
        {
	        echo "Hiba: ".$e->getMessage();
        }
       
    }
}
    header('location: index.php');

 
    
?>