<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "checkbox");



$dsn="mysql:dbname=".DBNAME."; host=".DBHOST;
try{
    $db=new PDO($dsn, DBUSER, DBPASS);
    $db->exec("SET NAMES utf8");
    echo "connexin a la database reussie";

}catch(PDOException $e){
    die($e->getMessage());
    echo "mauvaise connexion a la database!";
}


?>