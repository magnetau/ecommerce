<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB="ecommerce";

try {
    $db = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    //$db->query( 'use metra' );
    
    
?>