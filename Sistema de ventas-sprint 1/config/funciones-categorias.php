
<?php

require('conexion.php');

class Categorias extends Conexion {

    Public function Categorias() {

        parent::__construct();

    }
    
    Public function Mostrar() {

        $sql = "Select * from categoria";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['NOMBRE']."</td>
            <td style='vertical-align: middle;'>".$elemento['DESCRIPCION']."</td>
        </tr>
        ";

        }
    }
}

?>
