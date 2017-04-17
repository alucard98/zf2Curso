<?php

//namespace Modulo\Model\Entity;

namespace Application\Model\Entity;

class Modelo {

    private $texto;
    private $array;
    private $desdeFuera;

    public function __construct($valor) {
        $this->texto = "Hola desde mi modeo enviando datos desde dentro";
        $this->array = array();
        $this->desdeFuera = $valor;
    }

    public function getTexto() {
        return $this->texto;
    }

    private function cargaArray() {
        $a = array("manzana", "pera", "naranja");
        $conmma_separated = implode(",", $a);
        array_push($this->array, $conmma_separated);
    }

    public function getArray() {
        self::cargaArray(); //funcionalidad de llamar
        return $this->array;
    }

    public function desdeElController() {
        return $this->desdeFuera;
    }

}
