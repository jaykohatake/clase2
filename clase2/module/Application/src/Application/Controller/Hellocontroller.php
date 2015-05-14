<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HelloController extends AbstractActionController
{

      public function HelloAction() 
    { 
        $view =new ViewModel();
       $this->layout('layout/trabajo');
       $this->layout()->saludo="Pasando el atributo por layout";
        $this->layout()->title=" Stylized screens";
       return $view;
    } 



  }
