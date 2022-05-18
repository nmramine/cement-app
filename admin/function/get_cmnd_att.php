<?php
function get_cmnd_att(){
require('config.php');
$output=null;
$req6 = $bdd->prepare('SELECT u.nom,cm.id_cmnd,cm.type,cm.qty,cm.date_cmnd FROM cmnd cm,user u WHERE cm.stat=:stat and u.id_user=cm.id_user ORDER BY cm.date_cmnd DESC');
$req6->execute(array(':stat'=>0));
//$nbrow = $req6->rowCount();
while ($row = $req6->fetch(PDO::FETCH_ASSOC)){
$output[] = $row;
}
return $output;
}
?>