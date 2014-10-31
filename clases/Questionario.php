<?php

class Questionario{

    private $name;
    private $id;
    private $idp;
    public $calf;



    public function getQuestionario(){

        echo "<br>Modicar Usuario: ".$this->name."<br>";

    }

    public function setQuestionario(){

        $this->name="Monica Mendez Gutierrez";

        return $this->name;

    }

    public function readQuestionario(){
        echo"<table class='table table-striped'><thead><tr>";
        echo"<tr><td>Pregunta</td>";
        $cont=1;
        while ($cont<=10){
            $sql0="SELECT id_p MAX FROM pregunta";
            $this->idp=rand(1,20);
            $consulta0=mysql_query($sql0) or die ("error de consulta");
            $max=mysql_result($consulta0,0,'max');
            $sql1="Select * from pregunta where id_p=$this->idp";
            $consulta=mysql_query($sql1) or die ("error de consulta");
            $p=mysql_result($consulta,0,'pregunta');
            $this->id.=$this->idp." ";
            for ($y=1; $y<=$max; $y++){
                $pg[$y]=0;
                   $pg[$cont]=1;
                    echo"<tr><td>$cont. $p</td></tr><tr><td><input type='radio' value='F' name='r$cont'checked>Falso
                        <br><input type='radio' value='V' name='r$cont'>Verdadero</td>";
                    echo"</tr>";
                    $cont++;

              }
            echo"<input type='hidden' name='id' value='$this->id'>";
        }
        echo"</table>";

    }

    public  function Calificacion($id){
        $y=1;
        $this->calf=0;
        $arreglo = explode(" ",$id);
    foreach ( $arreglo as $id_pregunta ) {
        $id_pregunta;
        if($y!=11){
            $res=$_POST['r'.$y];
            $y++;
            $sql=mysql_query("SELECT * FROM pregunta where id_p='$id_pregunta' AND respuesta='$res'")or die ("error de consulta");
            if(mysql_num_rows($sql)!=0){
                $this->calf=$this->calf+1;
            }
        }
    }
        echo "<h1>Tu calificacion es:".$this->calf."</h1>";

    }
    public function insertCalificacion($idu,$calf2){
        $sql=mysql_query("select * from cuestionario where iduser=$idu")or die ("error de consulta");
        if(mysql_num_rows($sql)==0){
            mysql_query("INSERT INTO cuestionario (iduser,result) VALUES ($idu,$calf2)")or die ("error de consulta");
            echo"Se ha insertado tu calificaión";
        }
        else{
            $calf=mysql_result($sql,0,'result');
            if($calf2>$calf){
                mysql_query("UPDATE cuestionario SET result=$calf2 WHERE iduser=$idu");
                echo"Tu calificaión se actualizo";
            }
        }
        exit;
    }

}


?>