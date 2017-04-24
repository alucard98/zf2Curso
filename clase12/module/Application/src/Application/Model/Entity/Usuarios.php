<?php

namespace Application\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

class Usuarios extends TableGateway {
    private $nombre;
    private $correo;
    
    public function __construct(Adapter $adapter = null, $databaseSchema = null, ResultSet $selectResultPrototype = null) {
        return parent::__construct('usuarios', $adapter, $databaseSchema, $selectResultPrototype);
    }
    
    private function cargaAtributos($datos=array()){
        $this->nombre = $datos['nombre'];
        $this->correo = $datos['email'];
    }    
    
    public function getUsuarios(){
        $resultSet = $this->select();
        return $resultSet->toArray();
    }
    
    public function getDetallePorId($id){
        $id = (int) $id;
        $rowset = $this->select(array('id'=>$id));
        $row = $rowset->current();
        if(!$row){
            throw new \Exception("No hay registros asociados al valor $id");
        }
        return $row;
    }
    public function addUsuario($data=array())
        {
            self::cargaAtributos($data);
            /*echo $this->nombre;
            echo "<br>";
            echo $this->correo;
            */
            $array = array(
                'nombre'=>$this->nombre,
                'correo'=>$this->correo,
            );
            $this->insert($array);
            //$this->redirect()->toRoute('application',array('controller'=>'formulario'));
            
        }

    public function updateUsuario($id, $data=array())
    {
        
        $this->update($data, array('id' => $id));
    }

    public function deleteUsuario($id)
    {
        $this->delete(array('id' => $id));
    }

}
