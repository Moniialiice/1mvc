<?php

$ques = new Questionario();

$titulo='Questionario';
$contenido='Cultura General';

$variable=array('titulo'=>$titulo,
    'contenido'=>$contenido,
    'nombre'=>$ques->setQuestionario());

view('questionario', $variable);

?>