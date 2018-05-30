<?php

define('SERVIDOR' , 'localhost');
define('USUARIO' , 'root');
define('CONTRASEÑA' , '');
define('BASEDATOS' , 'sistema_ventas');
define('CARACTERES' , 'utf8');

Class Conexion {

    Protected $conexion;

    Public function Conexion() {

        $this->conexion = new mysqli(SERVIDOR , USUARIO , CONTRASEÑA , BASEDATOS);

        $this->conexion->set_charset(CARACTERES);

    }
    
}

?>