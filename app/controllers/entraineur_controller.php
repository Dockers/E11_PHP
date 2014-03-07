<?php

class entraineur_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionEntraineur($f3){
      echo View::instance()->render('inscriptionEntraineur.html');
      $f3->set('inscriptionEntraineur',$this->model->inscriptionEntraineur());
      echo View::instance()->render('mainEntraineur.html');
    }

    function searchEntraineurs($f3){
      $this->tpl=array('sync'=>'searchEntraineurs.html');
      if($f3->exists('POST.keywords')){
        $f3->set('entraineurs',$this->model->searchEntraineurs(array('keywords'=>$f3->get('POST.keywords'))));
        $this->tpl['async']='partials/entraineurs.html';
      }
    }

}


?>