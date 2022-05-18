<?php
function get_users_list(){
require('config.php');
$output=null;
$req6 = $bdd->prepare('SELECT * FROM user ORDER BY id_user DESC');
$req6->execute();
//$nbrow = $req6->rowCount();
while ($row = $req6->fetch(PDO::FETCH_ASSOC)){
$output[] = $row;
}
return $output;
}
?>