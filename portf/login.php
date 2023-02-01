<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alap.css">
    <title>Bejelentkezés</title>
</head>
<style>
Body {  
    background-color:pink;
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }
    span{
        color: red;
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
    h1{
        text-align: center;
    }
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }  
    </style> 
<body>
    <?php include 'navbar.php' ?>
    <div>
    <h1> Bejelentkezés </h1>   
    <form action="includes/login.inc.php" method="POST" >  
        <div class="container">   
            <label>Email : </label>   
            <input type="text" placeholder="Email" name="email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Password" name="password" required> 
            <?php
            if(isset($_SESSION['loginErr']))
            {
                echo"<span>" .$_SESSION['loginErr'] ."</span> </br>";
                unset($_SESSION['loginErr']);
            }
            ?>
            <button type="submit" name="submit">Login</button>   
            Ha van meglévő felhasználó <a href="signup.php"> fiókja </a>   
        </div>   
    </form>     
    </div>
</body>
</html>