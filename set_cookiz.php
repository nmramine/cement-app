<?php
function set_cookiz($mat) {
require('function/config.php');
$cookiz  = md5(rand(1000000,9999999));
setcookie('ids', $cookiz , 0);
$req3 = $bdd->prepare('UPDATE user set cookiz=:cookiz where mat=:mat');
$req3->execute(array(':cookiz' => $cookiz,':mat' => $mat));
}
?>