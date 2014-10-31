<?php
$idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];
if ($idu=="" or $acceso=="")
{print "<meta http-equiv='refresh' content='0;
url=login.php'>";
    exit;
}session_start();
$idu2=$_SESSION['idu'];
$acceso2=$_SESSION['acceso'];
if ($idu2=="" or $acceso2=="")
{	print "<meta http-equiv='refresh' content='0;
	url=login.php'>";
    exit;}
?>