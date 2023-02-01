<?php 
if(isset($_POST['submit']))
{
    $email = trim($_POST['email']);
    $password= trim($_POST['password']);

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    
    session_start();
    $login = new LoginContr($email, $password);
    $login->loginUser();
    //$_SESSION['success'] = "Sikeres regisztráció";
    header("location: ../login.php");
}

?>