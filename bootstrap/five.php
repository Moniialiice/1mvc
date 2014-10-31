<?php
$ide=$_POST['ide'];
include('base.php');
$sql1= "SELECT * FROM materias";
$valor1 = mysql_query($sql);
$cuantos1=mysql_num_rows($sql);

$sql= "SELECT * FROM materias";
$valor = mysql_query($sql);
$cuantos=mysql_num_rows($sql);

for($y=0; $y<$cuantos; $y++){
    $id_maestro=mysql_result($query,$y,'id_maestro');
    $nombre=mysql_result($query,$y,'nombre');
    echo"<option value='$id_maestro'>".$nombre."</option>";
}

?>