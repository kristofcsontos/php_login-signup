<?php 
if(isset($_POST['register']))
{
    $firstname= trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password1= trim($_POST['password1']);
    $password2 = trim($_POST['password2']);  
    $county =$_POST['county'];
    include "../classes/signup-contr.classes.php";
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    
    session_start();
    $signup = new SignupContr($firstname, $lastname, $email, $password1, $password2, $county);
    
    $signup->signupUser();
    $_SESSION['success'] = "Sikeres regisztráció";
    header("location: ../signup.php");
}

?>