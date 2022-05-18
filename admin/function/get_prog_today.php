<?php
function get_prog_today(){
require('config.php');
$output=null;
$today=date("Y-m-d");
$req6 = $bdd->prepare('SELECT u.nom,u.mat,c.type,p.qty FROM prog p
JOIN cmnd c 
ON c.id_cmnd=p.id_cmnd
JOIN user u 
ON u.id_user=c.id_user
WHERE p.date_prog=:date_prog');
$req6->execute(array(':date_prog'=>$today));
//$nbrow = $req6->rowCount();
while ($row = $req6->fetch(PDO::FETCH_ASSOC)){
$output[] = $row;
}
return $output;
}
?>