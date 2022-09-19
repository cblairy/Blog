<?php
$connex = "mysql:dbname=blog;host=db:3306;";
$user = 'coco';
$password = 'cocopassword';

try {
    $dbh = new PDO($connex,$user,$password);    
}
catch (PDOException $e){
    echo "Echec de connexion : " . $e->getMessage();
}