<?php
include './connection.php' ;
session_start();
$produit=$_GET['id'];
$user=$_SESSION['id_user'];
$req="INSERT INTO chart(`id_user`, `id_produit`) "
        ."values('$user','$produit')";
$db->query($req);

    header('location:./index.php');

?>

