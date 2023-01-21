<?php
session_start();
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
<!doctype html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feladat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
  span {
    color: red;
  }

  body {
    background-color: gray;
  }

  .matek {
    margin-top: 2%;
  }
</style>

<body>
  <div style="margin-top:5%;">
    <form class="row g-3" action="feldolgoz.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <label for="Firstname" class="form-label">Vezetéknév</label>
          <input type="text" class="form-control" name="firstname" id="firstname">
          <?php
          if(isset($_SESSION['firstnameErr']))
          {
            echo"<span>" .$_SESSION['firstnameErr'] ."</span>";
            unset($_SESSION['firstnameErr']);
          }
          ?>

        </div>
        <div class="col-md-6">
          <label for="Lastname" class="form-label">Keresztnév</label>
          <input type="text" class="form-control" name="lastname" id="lastname">
          <?php
          if(isset($_SESSION['lastnameErr']))
          {
            echo"<span>" .$_SESSION['lastnameErr'] ."</span>";
            unset($_SESSION['lastnameErr']);
          }
          ?>
        </div>
      </div>
      <div class="col-md-8">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="inputEmail">
        <?php
          if(isset($_SESSION['emailErr']))
          {
            echo"<span>" .$_SESSION['emailErr'] ."</span>";
            unset($_SESSION['emailErr']);
          }
          ?>
      </div>
      <br>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" name="password1" id="inputPassword1">
        <?php
          if(isset($_SESSION['password1Err']))
          {
            echo"<span>" .$_SESSION['password1Err'] ."</span>";
            unset($_SESSION['password1Err']);
          }
          ?>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" name="password2" id="inputPassword2">
        <?php
          if(isset($_SESSION['password2Err']))
          {
            echo"<span>" .$_SESSION['password2Err'] ."</span>";
            unset($_SESSION['password2Err']);
          }
          ?>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Megye</label>
        <select id="inputState" class="form-select" name="county">
          <option>Pest vármegye</option>
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
  </div>
  </form>
  </div>
  <div style="margin-top:2%;">
    <?php
        $have = FALSE;
        include "connect.php";
        $table="";
        $sql = "SELECT firstname,lastname,password,email,megye FROM regisztracio order by id";     
				$sth = $dbh->query($sql);
				$table .= "<table style=\"border-collapse: collapse;\">".
			               "<tr><th>Család név</th><th>Utónév</th><th>Kódolt Jelszó</th><th>Email</th><th>Megye</th></tr>";
				while($row = $sth->fetch(PDO::FETCH_ASSOC)) 
        {
				  $table .= "<tr>";
				  foreach($row as $column)
					$table .= "<td style=\"border: 1px solid black; padding: 3px;\">".$column."</td>";
				  $table .= "</tr>";
          $have=TRUE;
        }
				$table .= "</table>";
        if($have)
        {
          echo $table;
        }
        else
        {
          echo "<h3>Jelenleg nincs felvitt adat, kérlek adj hozzá új regisztrációt</h3>";
        }
    ?>
  </div>
  <div class="matek">
    <h1>Matek feladat</h1>
    Másodfokú egyenlet véletlen számokkal
    <?php
    
    $a =rand(-100, 100); //2; 
    $b =rand(-100, 100); //7;
    $c =rand(-100,100); //3;
    while($a==0)
    {
      $a =rand(-100, 100);  //a nem lehet 0, az osztás miatt
    }
    
    echo "<br>". $a . "x<sup>2</sup>+". $b . "x+" . $c ."=0<br>";
    $diszkriminans = $b * $b - 4 * $a * $c;  //D=b^2-4ac
    if ($diszkriminans > 0) {
        $x1 = (-$b + sqrt($diszkriminans)) / (2 * $a);
        $x2 = (-$b - sqrt($diszkriminans)) / (2 * $a);
        echo "A megoldás:<br> x1 = $x1 <br> x2 = $x2";
    } elseif ($diszkriminans == 0) {
        $x = -$b / (2 * $a);
        echo "A megoldás: x = $x";
    } else {
        echo "Nincs valós számok között megoldás.";
    }
?>
</body>

</html>