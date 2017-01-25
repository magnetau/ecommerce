<?php
include './connection.php' ;
session_start();
$user=$_SESSION['id_user'];
$req="DELETE FROM chart WHERE id_user='$user'";
$db->query($req);
session_destroy();
header('location:./index.php');
?>
