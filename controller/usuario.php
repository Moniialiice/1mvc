<?php

$usuario=new Usuario();

$titulo='Bienvenido Usuario';
$contenido='Contenido de la variable';

$variable=array('titulo'=>$titulo,
'contenido'=>$contenido,
'nombre'=>$usuario->setUsuario());

view('usuario', $variable);

?>