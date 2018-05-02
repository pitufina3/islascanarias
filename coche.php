<?php

require_once ("vehiculo.php");


class Coche extends Vehiculo{
    var $clase;
    var $precio;

    function __construct ($clase, $precio, $marca){
        parent:__construct ($clase, $precio);
        $this->clase = $clase;
        $this->precio = $precio;
        }

    function getClase (){
        return $this->clase;
    }

    function setClase ($clase){
        $this->clase = $clase;
    }

    function getPrecio (){
        return $this->precio;
    }

    function setPrecio ($precio){
        $this->precio = $precio;
    }
}

?>

    