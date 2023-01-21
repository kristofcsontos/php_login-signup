<?php
try
{
	$dbh = new PDO('mysql:host=localhost;dbname=feladat', 'root', '',
                  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   //echo "OK";
}
catch(PDOException $e)
{
	echo "Hiba: ".$e->getMessage();
}
?>