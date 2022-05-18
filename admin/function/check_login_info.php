<?php
function check_login_info($mat,$password) {
require('config.php');
$req6 = $bdd->prepare('SELECT id_admin FROM admin where mat=:mat AND password=:password');
$req6->execute(array(':mat'=>$mat,':password'=>$password));
$nbrow = $req6->rowCount();
while ($row = $req6->fetch(PDO::FETCH_ASSOC)){
$id_admin = $row['id_admin'];
}
//echo $nbrow;
if ($nbrow == 1 ) {
	return true;

}else{
return false;
}
}
?>