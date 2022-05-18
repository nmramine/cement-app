<?php
/*** PATH CONFIGURATIONS ****/
$domain_name = "http://localhost/";
$project_root = null;
$cpanel = "cpanel/";
$assets = "assets/";
$sass = "/sass";
$img = "img/";
$logo_store = $img."logo-store/";
$api = "api/";
$url_cpanel =$domain_name.$cpanel;
$url_api = $domain_name.$project_root.$api;
$url_assets= $domain_name.$assets;
$url_sass= $domain_name.$sass;
$url_img = $domain_name.$img;
/*** END PATH CONFIGURATIONS ***/

/***** DB INFORMATIONS *******/
$dbhost ="localhost";
$dbname ="sct";
$dbuser ="root";
$dbpass ="";
/***** END DB INFORMATIONS ****/

try
{
$bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}