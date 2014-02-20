<?php

class sportif_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionSportif($f3){
      echo View::instance()->render('inscriptionSportif.html');
      $f3->set('inscriptionSportif',$this->model->inscriptionSportif());
      echo View::instance()->render('mainSportif.html');
    }

    public function searchSportifs($f3){
      $f3->set('sportifs',$this->model->searchSportifs(array('keywords'=>$f3->get('POST.keywords'))));
      $this->tpl['async']='partials/sportifs.html';
    }

}


?>