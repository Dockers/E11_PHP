<?php

class sportif_controller extends controller{
    
  public function __construct(){
    parent::__construct();
    $this->tpl=array('sync'=>'home.html');
  }

  function home(){} 
  

    function inscriptionSportif($f3){
      // echo View::instance()->render('inscriptionSportif.html');
      $f3->set('inscriptionSportif',$this->model->inscriptionSportif());
      // echo View::instance()->render('home.html');
    }

    function searchSportifs($f3){
      $this->tpl=array('sync'=>'searchSportifs.html');
      $f3->set('sportifs',$this->model->searchDefault());
      $this->tpl['async']='partials/sportifs.html';
      if($f3->exists('POST.poids_min') && $f3->exists('POST.poids_max') && $f3->exists('POST.taille_min') && $f3->exists('POST.taille_max') && $f3->exists('POST.distance_min') && $f3->exists('POST.distance_max') && $f3->exists('POST.sport')){
        $f3->set('sportifs',$this->model->searchSportifs(
          array(
            'poids_min'=>$f3->get('POST.poids_min'),
            'poids_max'=>$f3->get('POST.poids_max'),
            'taille_min'=>$f3->get('POST.taille_min'),
            'taille_max'=>$f3->get('POST.taille_max'),
            'distance_min'=>$f3->get('POST.distance_min'),
            'distance_max'=>$f3->get('POST.distance_max'),
            'sport'=>$f3->get('POST.sport')
            )
          ));
        $this->tpl['async']='partials/sportifs.html';
      }
    }

}


?>