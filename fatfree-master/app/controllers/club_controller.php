<?php

class club_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function creationCLub($f3){
      echo View::instance()->render('creationCLub.html');
      $f3->set('creationCLub',$this->model->creationCLub());
    }

    public function searchClubs($f3){
      echo View::instance()->render('searchClubs.html');
      $f3->set('clubs',$this->model->searchClubs($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('clubs.html');
    }

}


?>