<?php

class sportif_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionSportif($f3){
      echo View::instance()->render('inscriptionSportif.html');
      $f3->set('inscriptionSportif',$this->model->inscriptionSportif());
    }

    public function searchSportifs($f3){
      echo View::instance()->render('searchSportifs.html');
      $f3->set('sportifs',$this->model->searchSportifs(array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('sportifs.html');
    }

}


?>