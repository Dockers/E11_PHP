<?php

class user_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }
  
  function home(){
    echo View::instance()->render('index.html');
  }

    function inscription($f3){
      echo View::instance()->render('inscription.html');//peut être séparer cette ligne dans une autre fonction
      if($f3->exists('POST.nom') && $f3->exists('POST.prenom')){
      $model=new user_model();
      $f3->set('inscription',$model->inscription(
        $f3,
        array(
          'nom'=>$f3->get('POST.nom'),
          'prenom'=>$f3->get('POST.prenom'),
          'password'=>$f3->get('POST.password'),
          'anniversaire'=>$f3->get('POST.anniversaire'),
          'age'=>$f3->get('POST.poids'),
          'sexe'=>$f3->get('POST.sexe'),
          'email'=>$f3->get('POST.email'),
          'photo'=>$f3->get('POST.photo'),
          'classe'=>$f3->get('POST.classe'),
          'dispo'=>$f3->get('POST.dispo'),
          'poids'=>$f3->get('POST.poids'),
          'taille'=>$f3->get('POST.taille'),
          'main'=>$f3->get('POST.main'),
          'palmares'=>$f3->get('POST.palmares')
          )
        )
      );
      echo View::instance()->render('confirm.html');
      }
    }

    public function searchSportifs($f3){
      echo View::instance()->render('searchSportifs.html');
      $f3->set('sportifs',$this->model->searchSportifs($f3,array('keywords'=>$f3->get('POST.nom'))));
      echo View::instance()->render('sportifs.html');
    }

}


?>