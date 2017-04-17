<?php

//llama al modulo y al directorio en donde tiene los formularios

namespace Application\Form;

//llamar algunos componentes
//captcha adapterinterface, alias a los componentes..
use Zend\Captcha\AdapterInterface as CaptchaAdapter;
//para cargar algunos tipo de componentes
use Zend\Form\Element;
// para un tipo de componentes especificos de los campos
use Zend\Form\Form;
//para colocar los captcha
use Zend\Captcha;
//nos da la posibilidad de trabajar con los campos de una manera distinta. se generan como arreglos o como los factory
use Zend\Form\Factory;

class Formularios extends Form {
    //se crea un constructor para inicializar los componentes del formulario    
public function __construct($name = null){
    parent::__construct($name);
}
}
