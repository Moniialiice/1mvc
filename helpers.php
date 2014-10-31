<?php

function view($plantilla,$variable=array() ){
    extract($variable);
    require('view/'.$plantilla.'.tpl.php');

}

function controller ($nombre){
    if (empty($nombre))

        $nombre='home';
        $archivo="controller/$nombre.php";



    if (file_exists($archivo))

        require($archivo);

        else
            echo "error archivos no encontrados";


  }

?>