<?php
if(isset($_COOKIE['ids'])) {
require('function/config.php');
//update online & cookiz status after logout
$cookiz = $_COOKIE['ids'];
$req3 = $bdd->prepare('UPDATE user set cookiz=:null_cookiz where cookiz=:cookiz');
$req3->bindValue(':cookiz',$cookiz);
$req3->bindValue(':null_cookiz',null);
$req3->execute();
setcookie("ids", "", time() - 3600);
}
header("Location: login.php");
?>