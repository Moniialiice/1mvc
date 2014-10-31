<?php

class Usuario{

    private $name;

    public function getUsuario(){

        echo "<br>Modicar Usuario: ".$this->name."<br>";

    }

    public function setUsuario(){

        $this->name="Monii";

        return $this->name;

    }

    public function readUsuario(){
        echo"Ver Usuario<br>";
        $query="SELECT * FROM usuario";
        $result=mysql_query($query)or die ("error de consuiñltyasuygf");

        echo"<table class='table table-striped'>
                     <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Tel&eacute;fono</th>
                            <th>Calle</th>
                            <th>Numero ext.</th>
                            <th>Numero int</th>
                            <th>Colonia</th>
                            <th>Municipio</th>
                            <th>Estado</th>

                        </tr>
                     </thead>";
        while($field=mysql_fetch_array($result)){
            $this->id=$field['iduser'];
            $this->name=$field['name'];
            $this->fname=$field['fname'];
            $this->sname=$field['lname'];
            $this->phone=$field['phone'];
            $this->street=$field['street'];
            $this->num1=$field['num1'];
            $this->num2=$field['num2'];
            $this->col=$field['col'];
            $this->mun=$field['mun'];
            $this->est=$field['est'];
            echo"<tbody>";
            echo"<tr>";
            echo"<td>".$this->id."</td>";
            echo"<td>".$this->name."</td>";
            echo"<td>".$this->fname."</td>";
            echo"<td>".$this->sname."</td>";
            echo"<td>".$this->phone."</td>";
            echo"<td>".$this->street."</td>";
            echo"<td>".$this->num1."</td>";
            echo"<td>".$this->num2."</td>";
            echo"<td>".$this->col."</td>";
            echo"<td>".$this->mun."</td>";
            echo"<td>".$this->est."</td>";

            echo"</tr>";
            echo"</tbody>";
        }
        echo"</table>";

    }

}


?>