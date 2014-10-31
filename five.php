<?include('accesos.php');
require("bd/bd.php");
$sql="select * from usuario where iduser=$idu";
$query=mysql_query($sql) or die("error");
$nivel=mysql_result($query,0,'lvl');

function encode_this($string){
    UTF8_encode($string);
    $control='alumno';
    $string=$control.$string.$control;
    $string=base64_encode($string);
    return($string);
}
?>
