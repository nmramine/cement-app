<?php
function del_cmnd($id){
require('config.php');
$req6 = $bdd->prepare('DELETE FROM `cmnd` WHERE id_cmnd=:id_cmnd');
$req6->execute(array(':id_cmnd'=>$id));
}
?>