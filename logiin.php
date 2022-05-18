<?php
require_once('function/check_login_info.php');
require_once('set_cookiz.php');
	if ((isset($_POST['mat'])) and (isset($_POST['password']))){
		$mat=$_POST['mat'];
		$password=$_POST['password'];
		if (check_login_info($mat,$password)!=false){
			//$id=check_login_info($email,$password);
			set_cookiz($mat);
		header("Location: index.php");
		}else{
		$msg_login="invalid email or password";
		$etat=false;
		header("Location: login.php");
		}
	}else{
	$msg_login="data not set";
	$etat=false;
	header("Location: login.php");
	}
?>