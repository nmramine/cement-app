<?php
require('config.php');
$nom=$_POST['nom'];
$mat=$_POST['mat'];
$password=$_POST['password'];
$telephone=$_POST['telephone'];
$id_user=$_POST['id_user'];
$req1 = $bdd->prepare('update user set nom=:nom,mat=:mat,password=:password,telephone=:telephone where id_user=:id_user');
$req1->execute(array(':nom'=>$nom,':mat'=>$mat,':password'=>$password,':telephone'=>$telephone,':id_user'=>$id_user));
	header("Location: ../index.php?page=1");
?>