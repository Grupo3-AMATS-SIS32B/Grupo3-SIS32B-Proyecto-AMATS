
<?php

require('conexion.php');

class Ventas extends Conexion {

    Public function Ventas() {

        parent::__construct();

    }
    
    Public function Mostrar() {

        $sql = "Select * from venta";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['FECHA']."</td>
            <td style='vertical-align: middle;'>".$elemento['EMPLEADO']."</td>
            <td style='vertical-align: middle;'>".$elemento['COMPROBANTE']."</td>
            <td style='vertical-align: middle;'>".$elemento['NUMERO_COMPROBANTE']."</td>
            <td style='vertical-align: middle;'>".$elemento['ESTADO']."</td>
        </tr>
        ";

        }
    }
}

?>
