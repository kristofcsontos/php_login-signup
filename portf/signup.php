<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztrálás</title>
    <link rel="stylesheet" href="alap.css">
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
  span{
    color: red;
  }  
</style>   
<body>
  <div>
    <?php include 'navbar.php' ?>
    <?php
$megyek = array("Baranya", "Bács-Kiskun", "Békés", "Borsod-Abaúj-Zemplén", "Csongrád-Csanád", "Fejér", "Győr-Moson-Sopron", "Hajdú-Bihar", "Heves", "Jász-Nagykun-Szolnok", "Komárom-Esztergom", "Nógrád", "Pest", "Somogy", "Szabolcs-Szatmár-Bereg", "Tolna", "Vas", "Veszprém", "Zala");
if(isset($_SESSION['error']))
{
  echo "<h1>" .$_SESSION['error'] ."</h1>";
  unset($_SESSION['error']);
}
if(isset($_SESSION['success']))
{
  echo "<h1>" .$_SESSION['success'] ."</h1>";
  unset($_SESSION['success']);
}
?>
    <div style="margin-top:5%;">
    <form class="row g-3" action="includes/signup.inc.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <label for="Firstname" class="form-label">Vezetéknév</label>
          <input type="text" class="form-control" name="firstname" id="firstname">
          <?php
          if(isset($_SESSION['firstname']))
          {
            echo"<span>" .$_SESSION['firstname'] ."</span> </br>";
            unset($_SESSION['firstname']);
          }
          ?>
        </div>
        <div class="col-md-6">
          <label for="Lastname" class="form-label">Keresztnév</label>
          <input type="text" class="form-control" name="lastname" id="lastname">
          <?php
          if(isset($_SESSION['lastname']))
          {
            echo"<span>" .$_SESSION['lastname'] ."</span> </br>";
            unset($_SESSION['lastname']);
          }
          ?>
        </div>
      </div>
      <div class="col-md-8">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="inputEmail">
        <?php
          if(isset($_SESSION['email']))
          {
            echo"<span>" .$_SESSION['email'] ."</span> </br>";
            unset($_SESSION['email']);
          }
          ?>
      </div>
      <br>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" name="password1" id="inputPassword1">
        <?php
          if(isset($_SESSION['password1']))
          {
            echo"<span>" .$_SESSION['password1'] ."</span> </br>";
            unset($_SESSION['password1']);
          }
          ?>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" name="password2" id="inputPassword2">
        <?php
          if(isset($_SESSION['password2']))
          {
            echo"<span>" .$_SESSION['password2'] ."</span> </br>";
            unset($_SESSION['password2']);
          }
          ?>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Megye</label>
        <select id="inputState" class="form-select" name="county">
          <option selected>Pest vármegye</option>
          <?php
            for ($i = 0; $i <= (count($megyek)-1); $i++) 
            {
              echo "<option>". $megyek[$i] . " vármegye </option>";
            }
          ?>
        </select>

      </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="register">Regisztáció</button>
    Ha van meglévő felhasználó <a href="login.php"> fiókja </a>  
  </div>
  </form>
  </div>
  </div>
  
</body>
</html>