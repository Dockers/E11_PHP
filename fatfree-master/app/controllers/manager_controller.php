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
       $this->tpl=array('sync'=>'searchManagers.html');
      if($f3->exists('POST.keywords')){
        $f3->set('managers',$this->model->searchManagers(array('keywords'=>$f3->get('POST.keywords'))));
        $this->tpl['async']='partials/managers.html';
      }
    }

}


?>