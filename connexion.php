<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "checkbox");


$dsn="mysql:host=".DBHOST."; name=".DBNAME;

try{
    $db=new PDO($dsn, DBUSER, DBPASS);

}catch(PDOException ){
    echo "mauvaise connexion a la database!";
}


?>