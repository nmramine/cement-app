<?php
require('config.php');
$qty=$_POST['qty'];
$type=$_POST['type'];
$date_cmnd=date("Y-m-d");
$id_user=$_POST['id'];
$stat=0;
$req1 = $bdd->prepare('INSERT INTO cmnd(`qty`, `type`, `date_cmnd`, `id_user`,`stat`) VALUES (:qty,:type,:date_cmnd,:id_user,:stat)');
$req1->execute(array(':qty'=>$qty,':type'=>$type,':date_cmnd'=>$date_cmnd,':id_user'=>$id_user,':stat'=>$stat));
	header("Location: ../index.php?page=1");
?>