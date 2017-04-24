<?php

namespace Application\Model\Entity;

class Procesa {

    private $nombre;
    private $correo;

    public function __Construct($datos = array()) {
        $this->nombre = $datos['nombre'];
        $this->correo = $datos['email'];
    }

    public function getData() {
        $array = array($this->nombre, $this->correo);
        return $array;
    }

}
