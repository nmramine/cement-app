<?php
function del_user($id){
require('config.php');
$req6 = $bdd->prepare('DELETE FROM `user` WHERE id_user=:id_user');
$req6->execute(array(':id_user'=>$id));
}
?>