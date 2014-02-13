<?php
class event_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('evenements');
     }
  
  function creationEvent($f3,$params){
    $inscrip=$this->mapper;

    $inscrip->nom_event=$params['nom_event'];
    $inscrip->date_event=$params['date_event'];
    $inscrip->heure_event=$params['heure_event'];
    $inscrip->photos_event=$params['photos_event'];
    $inscrip->adresse_event=$params['adresse_event'];
    $inscrip->codepostal_event=$params['codepostal_event'];
    $inscrip->lien_event=$params['lien_event'];

    $inscrip->save();
  }
  
    function searchEvents($f3, $params) {
      $requete = $this->mapper;
      return $requete->find('nom_event like "%'.$params['keywords'].'%"');
    }

}
?>