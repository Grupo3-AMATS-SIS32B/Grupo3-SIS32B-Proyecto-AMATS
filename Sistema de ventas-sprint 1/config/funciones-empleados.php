
<?php

require('conexion.php');

class Empleados extends Conexion {

    Public function Empleados() {

        parent::__construct();

    }
    
    Public function Mostrar() {

        $sql = "Select * from empleado";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['NOMBRE']."</td>
            <td style='vertical-align: middle;'>".$elemento['APELLIDO']."</td>
            <td style='vertical-align: middle;'>".$elemento['CODIGO_CARGO']."</td>
            <td style='vertical-align: middle;'>".$elemento['TELEFONO']."</td>
            <td style='vertical-align: middle;'>".$elemento['DUI']."</td>
            <td style='vertical-align: middle;'>".$elemento['DIRECCION']."</td>
        </tr>
        ";

        }
    }
}

?>
