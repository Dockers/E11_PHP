<?php

class entraineur_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionEntraineur($f3){
      echo View::instance()->render('inscriptionEntraineur.html');
      if($f3->exists('POST.nom') && $f3->exists('POST.prenom')){
      $model=new entraineur_model();
      $f3->set('inscriptionEntraineur',$model->inscriptionEntraineur(
        $f3,
        array(
          'nom_entraineur'=>$f3->get('POST.nom'),
          'prenom_entraineur'=>$f3->get('POST.prenom'),
          'email_entraineur'=>$f3->get('POST.email'),
          'password_entraineur'=>$f3->get('POST.password'),
          'sexe_entraineur'=>$f3->get('POST.sexe'),
          'codepostal_entraineur'=>$f3->get('POST.codepostal'),
          'anniversaire_entraineur'=>$f3->get('POST.anniversaire'),
          'statut_entraineur'=>$f3->get('POST.statut'),
          'sport_entraineur'=>$f3->get('POST.sport'),
          'diplome_entraineur'=>$f3->get('POST.diplome'),
          'club_entraineur'=>$f3->get('POST.club'),
          'palmares_entraineur'=>$f3->get('POST.palmares'),
          'images_entraineur'=>$f3->get('POST.photo'),
          'videos_entraineur'=>$f3->get('POST.video'),
          'boxeurs_entraineur'=>$f3->get('POST.sportifs')
          )
        )
      );
      echo View::instance()->render('confirm.html');
      }
    }

    public function searchEntraineurs($f3){
      echo View::instance()->render('searchEntraineurs.html');
      $f3->set('entraineurs',$this->model->searchEntraineurs($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('entraineurs.html');
    }

}


?>