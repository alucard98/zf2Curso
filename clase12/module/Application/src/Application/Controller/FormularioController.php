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
use Zend\Db\Adapter\Adapter;
use Application\Model\Entity\Usuarios;

class FormularioController extends AbstractActionController {
    public $dbAdapter;

    public function indexAction() {
        return new ViewModel();
    }

    public function registroAction() {
        if ($this->getRequest()->isPost()) {
            $this->dbAdapter= $this->getServiceLocator()->get('Zend\Db\Adapter');
            $u = new Usuarios($this->dbAdapter);
            //echo "se recibió el post"; 
            $data = $this->request->getPost();
            $u->addUsuario($data);
            //------------------  redireccionamiento --------------------- //
            return $this->redirect()->toUrl($this->getRequest()->getBaseUrl().'/application/formulario/registro/1');
            /*$form = new Formularios('form'); 
            $valores = array(
                'titulo' => 'Registro de Usuario',
                'form' => $form,
                'url' => $this->getRequest()->getBaseUrl(),
                'respuesta'=>'Registro ingresado exitosamente',
            );
            return new ViewModel($valores);
             */
            
        } else {
            //zona del formulario (aqui se carga los valores del formulario se coloca el dbbAdapter si va a llenar un select o algo asi)
            $form = new Formularios("form");
            $id = (int) $this->params()->fromRoute('id',0);
            $valores = array(
                'titulo' => 'Registro de Usuario',
                'form' => $form,
                'url' => $this->getRequest()->getBaseUrl(),
                'respuesta'=>$id,
            );
            return new ViewModel($valores);
        }
    }

}
