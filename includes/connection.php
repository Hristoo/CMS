<?php

try {

   $pdo = new PDO('mysql:host=localhost;dbname=cms','root', 'root1');
   // $mysqli = new mysqli("localhost", "root", "root1", "cms");
} catch (PDOException $e){
    echo $e->getMessage(),
    exit('Database error.');
}