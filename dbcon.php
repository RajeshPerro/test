<?php 
$x=mysql_connect("localhost",'root','');
if(!$x)
{
	die("I am dead".mysql_errno());
}
$x=mysql_select_db("doctor");
if(!$x)
die("Database Not Found".mysql_errno());

?>