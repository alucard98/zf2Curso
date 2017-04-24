<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\Formularios;
use Application\Model\Entity\Procesa;

class FormularioController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function formularioAction() {
        $form = new Formularios("form");
        $form->get('lenguaje')->setValueOptions(array(                
                '0' => 'Español',
                '1' => 'Ingles',
                '2' => 'Frances',
                '3' => 'Japones',
                '5' => 'Chino',
                '6' => 'Aleman',
                '7' => 'Turco',
                '8' => 'Coreano',
                '9' => 'Filipino',
                '10' => 'Tailandes',
                '11' => 'Arabe',
                '12' => 'Italiano',));
        $form->get('sexo')->setValueOptions(array(
            'f' => ' Femenino',
            'm' => ' Masculino'
        ));
        $form->get('preferencias')->setValueOptions(array('m'=>' Música','d'=>' Deporte','o'=>' Ocio','e'=>' Estudios'));
        $form->get('oculto')->setAttribute('value','87');
        return new ViewModel(array("titulo" => "Formularios en Zf2", "form" => $form,'url'=> $this->getRequest()->getBaseUrl()));
    }
    
    public function recibeAction(){
        $data = $this->request->getPost();
        $procesa = new Procesa($data);
        $datos = $procesa->getData();
        return new ViewModel(array('datos'=>$datos));
    }
}
