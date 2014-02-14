<?php

class sportif_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionSportif($f3){
      echo View::instance()->render('inscriptionSportif.html');
      if($f3->exists('POST.nom') && $f3->exists('POST.prenom')){
      $model=new sportif_model();
      $f3->set('inscriptionSportif',$model->inscriptionSportif(
        $f3,
        array(
          'nom_sportif'=>$f3->get('POST.nom'),
          'prenom_sportif'=>$f3->get('POST.prenom'),
          'email_sportif'=>$f3->get('POST.email'),
          'password_sportif'=>$f3->get('POST.password'),
          'sexe_sportif'=>$f3->get('POST.sexe'),
          'codepostal_sportif'=>$f3->get('POST.codepostal'),
          'anniversaire_sportif'=>$f3->get('POST.anniversaire'),
          'statut_sportif'=>$f3->get('POST.statut'),
          'sport_sportif'=>$f3->get('POST.sport'),
          'classe_sportif'=>$f3->get('POST.classe'),
          'poids_sportif'=>$f3->get('POST.poids'),
          'taille_sportif'=>$f3->get('POST.taille'),
          'club_sportif'=>$f3->get('POST.club'),
          'palmares_sportif'=>$f3->get('POST.palmares'),
          'lateralite_sportif'=>$f3->get('POST.lateralite'),
          'victoires_sportif'=>$f3->get('POST.victoires'),
          'defaites_sportif'=>$f3->get('POST.defaites'),
          'matchsnuls_sportif'=>$f3->get('POST.matchsnuls'),
          'images_sportif'=>$f3->get('POST.photo'),
          'videos_sportif'=>$f3->get('POST.video')
          )
        )
      );
      echo View::instance()->render('confirm.html');
      }
    }

    public function searchSportifs($f3){
      echo View::instance()->render('searchSportifs.html');
      $f3->set('sportifs',$this->model->searchSportifs($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('sportifs.html');
    }

}


?>