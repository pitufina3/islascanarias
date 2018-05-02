<?php

require_once ("camion.php");
require_once ("coche.php");

class Vehiculo {
    var $marca;
        function __construct ($marca){
        $this->marca = $marca;
        $this->camion = array();
        $this->coche = array();
    }

    function getMarca (){
        return $this->marca;
    }

    function setMarca ($marca){
        $this->marca = $marca;
    }
}

?>