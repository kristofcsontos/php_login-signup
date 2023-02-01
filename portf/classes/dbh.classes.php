<?php
class Dbh{
    protected function connect()
    {
        try {
            $username ="root";
            $password ="";
            $dbh = new PDO('mysql:host=localhost;dbname=feladat',$username, $password,
                  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            return $dbh;
        } catch (PDOException $e) {
            echo "Error! " . $e->getMessage(). "</br>";
        }
    }
}