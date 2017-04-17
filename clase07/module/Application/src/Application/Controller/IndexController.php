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
//use Modulo\Model\Entity\Modelo;
use Application\Model\Entity\Modelo;

class IndexController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function modelAction() {
        $m = new Modelo("texto parametro");
        $t = $m->getTexto();
        $a = $m->getArray();
        $desde = $m->desdeElController();
        return new ViewModel(array('texto' => $t, 'array' => $a, 'desde' => $desde));
    }

}
