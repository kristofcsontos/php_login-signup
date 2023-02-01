<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objektumok JavaScript-ben</title>
    <link rel="stylesheet" href="../../alap.css">
    <script type="text/javascript" src="obj.js">
    </script>
</head>

<body>

    <?php include '../../navbar.php'; ?>


    <script type="text/javascript">
        var myimage = new Image("minta.jpg", 200, 200, 100, 100);
    </script>
    <table>
        <tr>
            <td align="right">x:</td>
            <td><input type="text" id="x" name="x"></td>
            <td align="right">y:</td>
            <td><input type="text" id="y" name="y"></td>
            <td><button onclick="myimage.putAt(x.value,y.value);">Put At</button></td>
        </tr>
        <tr>
            <td align="right">width:</td>
            <td><input type="text" id="width" name="width"></td>
            <td align="right">height:</td>
            <td><input type="text" id="height" name="height"></td>
            <td><button onclick="myimage.resize(width.value,height.value);">Resize</button></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td><button onclick="myimage.show();">Show</button></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td><button onclick="myimage.hide();">Hide</button></td>
        </tr>
    </table>
</body>

</html>