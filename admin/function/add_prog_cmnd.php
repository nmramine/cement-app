<?php
require('config.php');
$qty=$_POST['qty'];
$qty1= $_POST['qty1'];
$qty2=$_POST['qty2'];
$qty3=$_POST['qty3'];
$date0=$_POST['date'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$date3=$_POST['date3'];
$id_cmnd=$_POST['id_cmnd'];
$stat=1;
if (($qty!='') and ($date0!='')){
$req1 = $bdd->prepare('INSERT INTO prog(`date_prog`, `qty`, `id_cmnd`) VALUES (:date_prog,:qty,:id_cmnd)');
$req1->execute(array(':date_prog'=>$date0,':qty'=>$qty,':id_cmnd'=>$id_cmnd));
$req6 = $bdd->prepare('update cmnd set stat=:stat where id_cmnd=:id_cmnd');
$req6->execute(array(':stat'=>1,':id_cmnd'=>$id_cmnd));
}
if (($qty1!='') and ($date1!='')){
$req1 = $bdd->prepare('INSERT INTO prog(`date_prog`, `qty`, `id_cmnd`) VALUES (:date_prog,:qty,:id_cmnd)');
$req1->execute(array(':date_prog'=>$date1,':qty'=>$qty1,':id_cmnd'=>$id_cmnd));
}
if (($qty2!='') and ($date2!='')){
$req1 = $bdd->prepare('INSERT INTO prog(`date_prog`, `qty`, `id_cmnd`) VALUES (:date_prog,:qty,:id_cmnd)');
$req1->execute(array(':date_prog'=>$date2,':qty'=>$qty2,':id_cmnd'=>$id_cmnd));
}
if (($qty3!='') and ($date3!='')){
$req1 = $bdd->prepare('INSERT INTO prog(`date_prog`, `qty`, `id_cmnd`) VALUES (:date_prog,:qty,:id_cmnd)');
$req1->execute(array(':date_prog'=>$date3,':qty'=>$qty3,':id_cmnd'=>$id_cmnd));
}
header("Location: ../index.php");
?>