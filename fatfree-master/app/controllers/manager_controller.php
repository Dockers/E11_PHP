<?php

class manager_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function inscriptionManager($f3){
      echo View::instance()->render('inscriptionManager.html');
      if($f3->exists('POST.nom') && $f3->exists('POST.prenom')){
      $model=new manager_model();
      $f3->set('inscriptionManager',$model->inscriptionManager(
        $f3,
        array(
          'nom_manager'=>$f3->get('POST.nom'),
          'prenom_manager'=>$f3->get('POST.prenom'),
          'email_manager'=>$f3->get('POST.email'),
          'password_manager'=>$f3->get('POST.password'),
          'sexe_manager'=>$f3->get('POST.sexe'),
          'codepostal_manager'=>$f3->get('POST.codepostal'),
          'anniversaire_manager'=>$f3->get('POST.anniversaire'),
          'statut_manager'=>$f3->get('POST.statut'),
          'evenements_manager'=>$f3->get('POST.evenements'),
          'experience_manager'=>$f3->get('POST.experience'),
          'photos_manager'=>$f3->get('POST.photo')
          )
        )
      );
      echo View::instance()->render('confirm.html');
      }
    }

    public function searchManagers($f3){
      echo View::instance()->render('searchManagers.html');
      $f3->set('managers',$this->model->searchManagers($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('managers.html');
    }

}


?>