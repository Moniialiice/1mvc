<?php
function encode_this($string){
    UTF8_encode($string);
    $control='alumno';
    $string=$control.$string.$control;
    $string=base64_encode($string);
    return($string);
}
?>
<?php
$user=$_POST['user'];
$psw=$_POST['password'];
$psw1=md5($psw);
if ($user=="" or $psw=="")
{
    $msg="Los campos deben ir llenos";
    print "<meta http-equiv='refresh' content='0;
	url=sys.php?msg=$msg'>";
    exit;
}

include('bd/bd.php');
$sql="select * from usuario where user='$user' and cont='$psw1'";
$consulta=mysql_query ($sql)  or die (mysql_error());
$cuantos=mysql_num_rows($consulta);
if ($cuantos==0)
{
    $msg="El usuario o password no son correctos";
    print "<meta http-equiv='refresh' content='0;
		url=sys.php?msg=$msg'>";
    exit;
}
else
{
    $idu=mysql_result($consulta, 0, 'iduser');
    $activo=mysql_result($consulta, 0, 'estatus');
    if($activo=='1'){
        $sql1="Select * from usuario where iduser=$idu";
        $consulta1=mysql_query($sql1) or die (mysql_error());
        $nombre=mysql_result($consulta1, 0, 'name');
        $usuario=mysql_result($consulta1,0,'user');

    }
    if ($activo=='0')
    {
        $msg='El usuario no esta activo, consulta a su administrador';
        print "<meta http-equiv='refresh' content='0;
		url=sys.php?msg=$msg'>";
        exit;
    }
    else
    {
        $idu=encode_this($idu);
        print "<meta http-equiv='refresh' content='0;
		url=access.php?$idu'>";
    }
}
?>