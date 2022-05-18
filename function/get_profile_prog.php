<?php
function get_profile_prog($id){
require('config.php');
$output=null;
$today=date("Y-m-d");
$req6 = $bdd->prepare('SELECT c.type,p.qty,p.date_prog FROM prog p
JOIN cmnd c 
ON c.id_cmnd=p.id_cmnd
WHERE c.id_user=:id_user and p.date_prog >= :today ORDER BY p.date_prog ASC');
$req6->execute(array(':id_user'=>$id,':today'=>$today));
//$nbrow = $req6->rowCount();
while ($row = $req6->fetch(PDO::FETCH_ASSOC)){
$output[] = $row;
}
return $output;
}
?>