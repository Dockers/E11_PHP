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
       $this->tpl=array('sync'=>'searchClubs.html');
      if($f3->exists('POST.keywords')){
        $f3->set('clubs',$this->model->searchClubs(array('keywords'=>$f3->get('POST.keywords'))));
        $this->tpl['async']='partials/clubs.html';
      }
    }

}


?>