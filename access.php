<?php
function decode_get($string)
{
    $cad=explode("?",$string);
    $string=$cad[1];

    $string=base64_decode($string);
    $control="alumno";
    $string=str_replace($control,"","$string");
    return ($string);
}
?>
<?php
$idu=decode_get($_SERVER["REQUEST_URI"]);
if ($idu=="")
{
    $msg="";
    print "<meta http-equiv='refresh' content='0;
	url=login.php?msg=$msg'>";
}
else
{
    SetCookie ('idu', $idu);
    SetCookie ('acceso', 1);
    session_start();
    $_SESSION['idu']=$idu;
    $_SESSION['acceso']=1;

    print "<meta http-equiv='refresh' content='0;
	url=view/home.php'>";
    exit;
}
?>