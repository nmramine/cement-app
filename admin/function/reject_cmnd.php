<?php
function reject_cmnd($id){
require('config.php');
$output=null;
$req6 = $bdd->prepare('update cmnd set stat=:stat where id_cmnd=:id_cmnd');
$req6->execute(array(':stat'=>2,':id_cmnd'=>$id));
}
?>