<?php

class entraineur_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionEntraineur($f3){
      echo View::instance()->render('inscriptionEntraineur.html');
      $f3->set('inscriptionEntraineur',$this->model->inscriptionEntraineur());
    }

    public function searchEntraineurs($f3){
      echo View::instance()->render('searchEntraineurs.html');
      $f3->set('entraineurs',$this->model->searchEntraineurs($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('entraineurs.html');
    }

}


?>