<?php
if(isset($_COOKIE['idu']))
{
$idu=$_COOKIE['idu'];
}
 $ques02=new Questionario();
?>

<html>
<head></head>
<body>
<h1><?=$titulo ?></h1>
<p><?=$contenido ?></p>
<p><?=$nombre ?></p>
<p><?php
    if(isset($_POST['enviar'])){
        $id=$_POST['id'];
        $ques02->Calificacion($id);
        $calf=$ques02->calf;
        $ques02->insertCalificacion($idu,$calf);
    }
    ?></p>

<form name='questt' method='post'>
    <div class="form-group">
        <?=$ques02->readQuestionario(); ?>
    </div>
    <button type="submit" name="enviar">Enviar</button>
</form>

</body>
</html>