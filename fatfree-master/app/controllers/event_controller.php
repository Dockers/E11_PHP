<?php

class event_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function creationEvent($f3){
      echo View::instance()->render('creationEvent.html');
      if($f3->exists('POST.nom')){
      $model=new event_model();
      $f3->set('creationEvent',$model->creationEvent(
        $f3,
        array(
          'nom_event'=>$f3->get('POST.nom'),
          'date_event'=>$f3->get('POST.date'),
          'heure_event'=>$f3->get('POST.heure'),
          'photos_event'=>$f3->get('POST.photo'),
          'adresse_event'=>$f3->get('POST.adresse'),
          'codepostal_event'=>$f3->get('POST.codepostal'),
          'description_event'=>$f3->get('POST.description'),
          'lien_event'=>$f3->get('POST.lien')
          )
        )
      );
      echo View::instance()->render('confirm.html');
      }
    }

    public function searchEvents($f3){
      echo View::instance()->render('searchEvents.html');
      $f3->set('events',$this->model->searchEvents($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('events.html');
    }

}


?>