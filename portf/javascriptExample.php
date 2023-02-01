<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="alap.css">
  <style>
    .linkek {
      text-decoration: none;
      color: black;
      padding-left:4%;
    }

    ol {
      counter-reset: item;
      list-style-type: none;
      line-height: 2.2;
      margin-left: -40px;
    }

    ol li {
      display: block;
      position: relative;
    }

    ol li span {
      margin-left: 40px;
    }

    ol li:before {
      content: counter(item) " ";
      counter-increment: item;
      color: #7eb4e2;
      position: absolute;
      top: 50%;
      margin-top: -1em;
      height: 2em;
      width: 2em;
      line-height: 2em;
      text-align: center;
      border-radius: 2em;
      font-weight: 700;
      background: linear-gradient(45deg, #f69ec4, #f9dd94);
    }
  </style>
  <title>Feladatok</title>
</head>

<body>
  <?php include 'navbar.php' ?>
  <div class="content">
    <hr>
  <ol>
    <li><a class="linkek" href="./feladatok/Kép/obj.php">Kép</a> </li>
    <li><a class="linkek" href="./feladatok/Tábla/tabla.php">Tábla</a></li>
    <li><a class="linkek" href="./feladatok/TicTacToe/index.php">Tic Tac Toe</a></li>
    <li><a class="linkek" href="./feladatok/ToDo/todo.php">ToDo</a></li>
    <li><a class="linkek" href="./feladatok/Óra/ora.php">Óra</a></li>
  </ol>
  </div>
</body>

</html>