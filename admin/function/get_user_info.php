<?php
function get_user_info($id){
require('config.php');
$req6 = $bdd->prepare('SELECT * FROM user where id_user=:id_user');
$req6->execute(array(':id_user'=>$id));
//$nbrow = $req6->rowCount();
$row = $req6->fetch(PDO::FETCH_ASSOC);
return $row;
}
?>