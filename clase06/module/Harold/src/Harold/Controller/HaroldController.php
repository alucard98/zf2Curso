<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Harold\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HaroldController extends AbstractActionController
{
    public function indexAction()
    {
        $view = new ViewModel();
        $this->layout('layout/trabajo');
        $this->layout()->saludo="Hola, soy el parametro";
        $this->layout()->title="Mi Nuevo Layout";
        return $view;
        //return new ViewModel();
    }
    
}
