<?php
session_start();
?>
<nav class="navbar">
        <div class="name"><a href="Iskola/index.php">Csontos Kristóf</a> </div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="/portf/index.php">Főoldal</a></li>
            <li><a href="/portf/javascriptExample.php">Feladatok</a></li>
            <li><a href="/portf/contact.php">Kapcsolat</a></li>
            <?php
            if(isset($_SESSION['email']))
            {
            ?>
            <li><a href="#"><?php echo $_SESSION['email'];?></a></li>
            <li><a href="/portf/includes/logout.inc.php">Kijelentkezés</a></li>
              <?php
            }
            else
            {
              ?>
            <li><a href="/portf/login.php">Bejelentkezés</a></li>
            <li><a href="/portf/signup.php">Regisztráció</a></li>
            <?php } ?>
          </ul>
        </div>
      </nav>