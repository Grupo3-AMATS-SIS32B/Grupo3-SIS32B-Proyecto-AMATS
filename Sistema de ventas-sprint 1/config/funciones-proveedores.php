
<?php

require('conexion.php');

class Proveedores extends Conexion {

    Public function Proveedores() {

        parent::__construct();

    }
    
    Public function Mostrar() {

        $sql = "Select * from proveedor";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['NOMBRE']."</td>
            <td style='vertical-align: middle;'>".$elemento['TELEFONO']."</td>
            <td style='vertical-align: middle;'>".$elemento['EMAIL']."</td>
            <td style='vertical-align: middle;'>".$elemento['DIRECCION']."</td>
            <td style='vertical-align: middle;'>".$elemento['IMAGEN']."</td>
        </tr>
        ";

        }
    }
}

?>
