
<?php

require('conexion.php');

class Compras extends Conexion {

    Public function Compras() {

        parent::__construct();

    }
    
    Public function Mostrar() {

        $sql = "Select * from compra";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['FECHA']."</td>
            <td style='vertical-align: middle;'>".$elemento['CODIGO_EMPLEADO']."</td>
            <td style='vertical-align: middle;'>".$elemento['COMPROBANTE']."</td>
            <td style='vertical-align: middle;'>".$elemento['NUMERO_COMPROBANTE']."</td>
            <td style='vertical-align: middle;'>".$elemento['CODIGO_PROVEEDOR']."</td>
        </tr>
        ";

        }
    }
}

?>
