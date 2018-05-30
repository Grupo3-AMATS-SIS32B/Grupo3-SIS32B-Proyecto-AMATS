
<?php

require('conexion.php');

class Cargos extends Conexion {

    Public function Cargos() {

        parent::__construct();

    }

    Public function Insertar($nombre , $descripcion) {

        $sql = "Insert into cargo values('$nombre' , '$descripcion')";

        $this->conexion->query($sql);
        
    }
    
    Public function Mostrar() {

        $sql = "Select * from cargo";

        $resultado = $this->conexion->query($sql);

        $array = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($array as $elemento) {

        echo "
        <tr>
            <td style='vertical-align: middle;'>".$elemento['NOMBRE']."</td>
            <td style='vertical-align: middle;'>$".$elemento['SALARIO']."</td>
        </tr>
        ";

        }
    }
}

?>
