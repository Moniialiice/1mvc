<?php
$bn_connect=mysql_connect("localhost","root","");
$base=mysql_select_db('aleatorio',$bn_connect)or die("error de base");
mysql_query("SET NAMES 'UTF8'");
?>