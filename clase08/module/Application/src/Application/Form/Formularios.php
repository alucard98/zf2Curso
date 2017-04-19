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
    public function __construct($name = null) {
        parent::__construct($name);
        $this->add(array(
            'name' => 'nombre',
            'options' => array(
                'label' => 'Nombre Completo',
            ),
            'attributes' => array(
                'type' => 'text',
                'class'=> 'form-control'
            ),
        ));
        
        $factory = new Factory();
        $email = $factory->createElement(array(
            'type'=>'Zend\Form\Element\Email',
            'name'=>'email',
            'options'=>array(
                'label'=>'Correo',
            ),
            'attributes' => array(
                'type' => 'text',
                'class'=> 'form-control'
            ),
        ));
        $this->add($email);
        
        //boton enviar
        
        //$this->add(new Element\Csrf('security')); //esto es para el captcha
        $this->add(array(
            'name' => 'send',
            'attributes'=>array(
                'type'=>'submit',
                'value'=>'Enviar',
                'class'=>'btn-sm btn-danger',
                'tittle' => 'Enviar'
            )
        ));
        
        
//        $name = new Element('name');
//        $name->setLabel('Your name');
//        $name->setAttributes(array('type'=>'text'));
    }

}
