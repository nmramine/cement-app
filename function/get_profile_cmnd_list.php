<?php
function get_profile_cmnd_list($id){
require('config.php');
$output=null;
$req6 = $bdd->prepare('SELECT * FROM cmnd WHERE id_user=:id_user ORDER BY date_cmnd DESC');
$req6->execute(array(':id_user'=>$id));
//$nbrow = $req6->rowCount();
while ($row = $req6->fetch(PDO::FETCH_ASSOC)){
$output[] = $row;
}
return $output;
}
?>