<?php 
include './connection.php' ;

$login=$_POST['login'];
$mdp=$_POST['mdp'];
$rg="INSERT INTO users(`login`, `password`,`point`) values('$login','$mdp',0)";
$res=$db->query($rg);
$Message="4C";
header('location:./login.php?stat=' . urlencode($Message));

?>

