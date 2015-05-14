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


class IndexController extends AbstractActionController
{


    

         public function modelAction() 
    { 
           if(isset($_FILES['upload'])) {
            $uploads = $_FILES['upload'];
         } 

 $upload_name = $uploads['name'];
 $upload_tmp = $uploads['tmp_name'];
$upload_ext = explode('.',$upload_name);
$upload_ext = strtolower(end($upload_ext));
$allowed =  array('pdf');
if(in_array($upload_ext , $allowed )){ 
        $file_name_new = uniqid('',true) . '.' . $upload_ext ;
         $file_destination = 'uploads/' . $file_name_new;
    
if(move_uploaded_file($upload_tmp , $file_destination)) { 

  echo  $file_destination;
} 
} 
    return new ViewModel(array('texto'=> $file_destination));
} 
    


      public function parametrosAction() 
    { 
        return new ViewModel();
    } 
    public function tablasAction()
    { 
         $saludo = array(
            array("Nombre" => "Juan"),
            array("Nombre" => "Carlos"),
            array("Nombre" => "Pedro"),
            array("Nombre" => "Camilo"),
            array("Nombre" =>"jose"));
         $email = array(
            array("Email" => "juan@gmail.com"),
            array("Email" => "Carlos@gmail.com"),
            array("Email" => "Pedro@gmail.com"),
            array("Email" => "Camilo@gmail.com"),
            array("Email" => "Jose@gmail.com"));
 return new ViewModel(array('saludo'=> $saludo , 'email'=> $email));
    } 
}
