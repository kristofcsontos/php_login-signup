
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tic Tac Toe</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" href="../../alap.css">
</head>
<body>
  <?php include '../../navbar.php' ?>
  <div class="margo">
  <table id="game">
    <tr>
      <td id="cell-0"></td>
      <td id="cell-1"></td>
      <td id="cell-2"></td>
    </tr>
    <tr>
      <td id="cell-3"></td>
      <td id="cell-4"></td>
      <td id="cell-5"></td>
    </tr>
    <tr>
      <td id="cell-6"></td>
      <td id="cell-7"></td>
      <td id="cell-8"></td>
    </tr>
  </table>
  <button id="restart">Újrakezdés</button>
  </div>
  <script src="script.js"></script>
</body>
</html>
