<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óra</title>
    <link rel="stylesheet" href="../../alap.css">
    <link rel="stylesheet" href="ora.css">
</head>
<body>
    <?php include '../../navbar.php'; ?>
    <div id="clock">00:00:00</div>
    <div id="stopwatch">00:00:00</div>
    <button id="startStop" onclick="startStop()">Start/Stop</button>
    <script src="ora.js"></script>
</body>
</html>