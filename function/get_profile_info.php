<?php
function get_profile_info($cookiz){
require('config.php');
$req6 = $bdd->prepare('SELECT * FROM user where cookiz=:cookiz');
$req6->execute(array(':cookiz'=>$cookiz));
//$nbrow = $req6->rowCount();
$row = $req6->fetch(PDO::FETCH_ASSOC);
return $row;
}
?>