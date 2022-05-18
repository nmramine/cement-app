<?php
require('config.php');
$nom=$_POST['nom'];
$mat=$_POST['mat'];
$password=$_POST['password'];
$telephone=$_POST['telephone'];
$req1 = $bdd->prepare('INSERT INTO user(`nom`, `mat`, `password`, `telephone`) VALUES (:nom,:mat,:password,:telephone)');
$req1->execute(array(':nom'=>$nom,':mat'=>$mat,':password'=>$password,':telephone'=>$telephone));
	header("Location: ../index.php?page=1");
?>