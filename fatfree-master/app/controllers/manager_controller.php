<?php

class manager_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionManager($f3){
      echo View::instance()->render('inscriptionManager.html');
      $f3->set('inscriptionManager',$this->model->inscriptionManager());
    }

    public function searchManagers($f3){
      echo View::instance()->render('searchManagers.html');
      $f3->set('managers',$this->model->searchManagers($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('managers.html');
    }

}


?>