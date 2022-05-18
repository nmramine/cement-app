<?php
function check_login($cookiz) {
require('config.php');
//check if cookiz value is generated from us
$req5 = $bdd->prepare('SELECT count(id_admin) FROM admin WHERE cookiz = :cookiz');
$req5->execute(array(':cookiz' => $cookiz));
$nbrow = $req5->fetchColumn(0);
if ($nbrow == 1 ) {
	return true;

}else{
return false;
}

}
?>