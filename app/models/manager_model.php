<?php
class manager_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('managers');
     }
  
  function inscriptionManager(){
    $inscrip=$this->mapper;
    $inscrip->copyFrom('POST');
    $inscrip->save();
  }
  
    function searchManagers($params) {
      $requete = $this->mapper;
      return $requete->find('nom_manager like "%'.$params['keywords'].'%" or prenom_manager like "%'.$params['keywords'].'%"');
    }

}
?>