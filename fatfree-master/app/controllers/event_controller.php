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
       $this->tpl=array('sync'=>'searchEvents.html');
      if($f3->exists('POST.keywords')){
        $f3->set('events',$this->model->searchEvents(array('keywords'=>$f3->get('POST.keywords'))));
        $this->tpl['async']='partials/events.html';
      }
    }

}


?>