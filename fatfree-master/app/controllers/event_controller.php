<?php

class event_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

    function creationEvent($f3){
      echo View::instance()->render('creationEvent.html');
      $f3->set('creationEvent',$this->model->creationEvent());
    }

    public function searchEvents($f3){
      echo View::instance()->render('searchEvents.html');
      $f3->set('events',$this->model->searchEvents($f3,array('keywords'=>$f3->get('POST.keywords'))));
      echo View::instance()->render('events.html');
    }

}


?>