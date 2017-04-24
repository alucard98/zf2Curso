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
                'class'=> 'form-control',
                'placeholder' => 'Ingrese su nombre completo'
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
                'class'=> 'form-control',
                'placeholder' => 'you@domain.com'
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
        
        //campo de tipo password
        $this->add(array(
            'name' => 'pass',
            'options' => array(
                'label' => 'Contrase&ntilde;a',               
            ),  
            'attributes' => array(
                'type' => 'password',
                'class'=> 'form-control',
                'placeholder' => 'Ingrese su clave'
            ),
        ));
        
        // File Input
        $file = new Element\File('file');
        $file->setLabel('Suba su foto')
             ->setAttribute('id', 'image-file');
        $this->add($file);
        
        
        // RadioButton       
        $radio = new Element\Radio('sexo');
        $radio->setLabel('Cual es su genero ?'); 
        $radio->setAttributes(array(
            'class'=>'flat'
        ));
        $radio->setLabelAttributes(array(
            'class'=>'radio-inline'
        ));
        $this->add($radio);

        // Select
        $select = new Element\Select('lenguaje');
        $select->setLabel('Cual es tu lengua Materna?'); 
        $select->setEmptyOption('Seleccione..'); 
        $select->setAttributes(array(
            'class'=>'form-control',
            'multiple'=>true,
        ));        
        $this->add($select);
        
        $pais = new Element\Select('pais');
        $pais->setLabel('cual es tu pais?');
        $pais->setValueOptions(array(
         'european' => array(
            'label' => 'European languages',
            'options' => array(
               '0' => 'French',
               '1' => 'Italian',
            ),
         ),
         'asian' => array(
            'label' => 'Asian languages',
            'options' => array(
               '2' => 'Japanese',
               '3' => 'Chinese',
            ),
         ),
        )); 
        $pais->setAttributes(array(
            'class'=>'form-control'
        )); 
        $this->add($pais);
        
        //campo oculto
        $oculto = new Element\Hidden('oculto');
        $this->add($oculto);
        
        //checkBox para aceptar terminos y condiciones
        $condiciones = new Element\Checkbox('condiciones');
        $condiciones->setLabel(' Acepto los Términos y Condiciones &nbsp;');
        $condiciones->setAttributes(array(
            'class'=>'flat'
        ));
        $condiciones->setLabelAttributes(array(
            'class'=>'checkbox-inline'
        ));
        $this->add($condiciones);
        
        //multicheckbox
        $preferencias = new Element\MultiCheckbox('preferencias');
        //$preferencias->setAttribute('empty_option','JJJ');
        $preferencias->setLabel('Indique sus preferencias');
        $preferencias->setAttributes(array(
            'class'=>'flat'
        ));
        $preferencias->setLabelAttributes(array(
            'class'=>'checkbox-inline'
        ));
        $this->add($preferencias);
        
    }

}
