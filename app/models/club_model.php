<?php
class club_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('clubs');
     }
  
  function creationCLub(){
    $inscrip=$this->mapper;
    $inscrip->copyFrom('POST');
    $inscrip->save();
  }
  
    function searchClubs($params) {
      $requete = $this->mapper;
      return $requete->find('nom_club like "%'.$params['keywords'].'%"');
    }

}
?>