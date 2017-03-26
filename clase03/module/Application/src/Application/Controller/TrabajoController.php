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

class TrabajoController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function otroAction() {
        return new ViewModel();
    }

    public function recibeparametrosAction() {
        $saludo = "mensaje para correr desnudo por la casa!!! ";
        $array = array('Pedro', 'Marcelo', 'Pablo', 'Romina');
        return new ViewModel(array('saludo' => $saludo, 'segundo' => 'cualquier cosa', 'nombres' => $array));
    }

    public function valoresurlAction() {
        $id = (int) $this->params()->fromRoute('id', null);
        $id2 = $this->params()->fromRoute('id2', null);
        $titulo = "Valores get por la URL";
        $url = $this->getRequest()->getBaseUrl();
        return new ViewModel(array('titulo' => $titulo, 'id' => $id, 'id2' => $id2, 'url' => $url));
    }

    //Plugginf Redirect : redirecciona, recargaa la pagina, peticion al servidor hhtp, quiere decir se pierde todo lo que son seciones . arrays
    public function redireccionarAction() {
        return $this->redirect()->toUrl($this->getRequest()->getBaseUrl() . '/application/trabajo/index');
    }

    //Pluggins forward : carga una vista dentro del metodo que no se llama exactamente como el metodo
    public function cargaotravistaAction() {
        return $this->forward()->dispatch('Application\Controller\Trabajo', array('action' => 'otro'));
    }
    
    //Render , lo que hace es indicar la vista a donde tu quieres que carge, parecido a forwar, con la diferencia que en vez de llamar directamente al pluggin , 
    //a traves del llamado a una sintaxis en un comentario llamas al plugin render y le indicas la vista absoluta que se quiere que cargue, asociada al view model
    public function conrenderAction() {
        // Rendere application/trabajo/corrender.phtml
        $view = new ViewModel();
        return $view;
    }

}
