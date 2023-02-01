<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. ZH</title>
    <link rel="stylesheet" href="../../alap.css">
    <script type="text/javascript" src="tabla.js">
    </script>
    <script type="text/javascript">
        var objects = [];
        objects.push(new Csapat('Csapat I', 'Budapest', 2500000));
        objects.push(new SportCsapat('Csapat II', 'Kecskemét', 3000000, 'Labdarugás'));
        objects.push(new SportCsapat('Csapat III', 'Szeged', 2750000,'Kosárlabda'));
        console.log(objects);
    </script>
</head>
<body>
<?php include '../../navbar.php' ?>
    <table border="1">
        <caption>Kezdő tábla</caption>
        <tr><th>Név</th><th>Város</th><th>Költségvetés</th><th>Sport</th><th>Tagok</th></tr>
        <script type="text/javascript">
        document.write("<tr><td>"+objects[0].nev+"</td><td>"+objects[0].varos+"</td><td>"+objects[0].koltsegvetes+"</td><td>---</td><td>---</td></tr>");
        document.write("<tr><td>"+objects[1].nev+"</td><td>"+objects[1].varos+"</td><td>"+objects[1].koltsegvetes+"</td><td>"+objects[1].sport+"</td><td>"+objects[1].tagokSzama()+": "+objects[1].tagok+"</td></tr>");
        document.write("<tr><td>"+objects[2].nev+"</td><td>"+objects[2].varos+"</td><td>"+objects[2].koltsegvetes+"</td><td>"+objects[2].sport+"</td><td>"+objects[2].tagokSzama()+": "+objects[2].tagok+"</td></tr>");
        </script>
    </table>
    <script type="text/javascript">
        objects[0].koltsegvetesModosit(3000000);
        objects[2].koltsegvetesModosit(4000000);
        objects[1].tag("Péter");objects[1].tag("Antal");objects[1].tag("László");
        objects[2].tag("Anna");objects[2].tag("Melinda");
    </script>
    <br>
    <table border="1">
        <caption>Módosítások utáni tábla</caption>
        <tr><th>Név</th><th>Város</th><th>Költségvetés</th><th>Sport</th><th>Tagok</th></tr>
        <script type="text/javascript">
        document.write("<tr><td>"+objects[0].nev+"</td><td>"+objects[0].varos+"</td><td>"+objects[0].koltsegvetes+"</td><td>---</td><td>---</td></tr>");
        document.write("<tr><td>"+objects[1].nev+"</td><td>"+objects[1].varos+"</td><td>"+objects[1].koltsegvetes+"</td><td>"+objects[1].sport+"</td><td>"+objects[1].tagokSzama()+": "+objects[1].tagok+"</td></tr>");
        document.write("<tr><td>"+objects[2].nev+"</td><td>"+objects[2].varos+"</td><td>"+objects[2].koltsegvetes+"</td><td>"+objects[2].sport+"</td><td>"+objects[2].tagokSzama()+": "+objects[2].tagok+"</td></tr>");
        </script>
    </table>
</body>
</html>
