<?php
include './connection.php' ;

$id=$_GET['id'];
$prix=0;
$req="DELETE FROM chart WHERE id_produit='$id' limit 1";
$db->query($req);
$req =$db->query("SELECT prix FROM produit WHERE id='$id'");
                    while ($row = $req->fetch()) {$prix=$row['prix'];}
 $_SESSION['prix']=$_SESSION['prix']-$prix;                   

header('location:./chart.php');
?>
