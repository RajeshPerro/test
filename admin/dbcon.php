<?php 
$x=mysql_connect("localhost",'B@se_de_d@toS','Ultr@secret0');


if(!$x)
{
	die("I am dead".mysql_errno());
}
$x=mysql_select_db("doctor");
if(!$x)
die("Database Not Found".mysql_errno());


mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");

$Server='http://'.$_SERVER['HTTP_HOST'].'/muktizoddha_image';
?>