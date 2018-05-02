<?php

require_once ("vehiculo.php");

class Camion extends Vehiculo {
    var $pma;
    var $tara;

    function __construct ($pma, $tara, $marca){
        parent:__construc ($pma, $tara);
        $this->pma = $pma;
        $this->tara = $tara;
    }

    function getPma (){
        return $this->pma;
    }

    function setPma ($pma){
        $this->pma = $pma;
    }

    function getTara (){
        return $this->tara;
    }

    function setTara ($tara){
        $this->tara = $tara;
    }
}

?>
