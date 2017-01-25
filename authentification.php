<?php include './connection.php' ;
session_start ();
$_SESSION['login']=$_POST['login'];
$_SESSION['mdp']=$_POST['mdp'];
$login=$_SESSION['login'];
$mdp=$_SESSION['mdp']; 
$rg="SELECT * FROM users WHERE login='$login' AND password='$mdp'";
$res=$db->query($rg);
$found=false;
$count=0;
$Message="3B";
while(($row=$res->fetch()) && !$found){
    $count++;
    
    if($count>0){
        $found=true;
        
        $_SESSION['id_user']=$row['id'];
    }
}
if($found){
    
        header('location:./index.php');
    
}
else
    header('location:./login.php?Message=' . urlencode($Message));

?>


