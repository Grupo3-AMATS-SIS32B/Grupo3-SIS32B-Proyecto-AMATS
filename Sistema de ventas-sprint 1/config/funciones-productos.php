
<?php

require('conexion.php');

class Productos extends Conexion {

    Public function Productos() {

        parent::__construct();

    }
    
    Public function Mostrar() {

        $sql = "Select * from producto";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['NOMBRE']."</td>
            <td style='vertical-align: middle;'>".$elemento['CODIGO_CATEGORIA']."</td>
            <td style='vertical-align: middle;'>".$elemento['DESCRIPCION']."</td>
            <td style='vertical-align: middle;'>".$elemento['IMAGEN']."</td>
        </tr>
        ";

        }
    }
}

?>
