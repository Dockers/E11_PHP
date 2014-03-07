<?php
class event_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('evenements');
     }
  
  function creationEvent(){
    $crea=$this->mapper;
    $crea->copyFrom('POST');
    $crea->save();
  }
  
    function searchEvents($params) {
      $requete = $this->mapper;
      return $requete->find('nom_event like "%'.$params['keywords'].'%"');
    }

}
?>