<?php

class club_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function creationCLub($f3){
      echo View::instance()->render('creationCLub.html');
      if($f3->exists('POST.nom') && $f3->exists('POST.email')){
      $model=new club_model();
      $f3->set('creationCLub',$model->creationCLub(
        $f3,
        array(
          'nom_club'=>$f3->get('POST.nom'),
          'email_club'=>$f3->get('POST.email'),
          'password_club'=>$f3->get('POST.password'),
          'annee_club'=>$f3->get('POST.annee'),
          'ville_club'=>$f3->get('POST.ville'),
          'sport_club'=>$f3->get('POST.sport'),
          'images_club'=>$f3->get('POST.photo')
          )
        )
      );
      echo View::instance()->render('confirm.html');
      }
    }

    public function searchClubs($f3){
      echo View::instance()->render('searchClubs.html');
      $f3->set('clubs',$this->model->searchClubs($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('clubs.html');
    }

}


?>