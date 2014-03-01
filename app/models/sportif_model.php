<?php
class sportif_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('sportifs');
     }
  
    function inscriptionSportif(){
        $inscrip=$this->mapper;
        $inscrip->copyFrom('POST');
        $inscrip->save();
    }
  
    function searchSportifs($params) {
        $requete = $this->mapper;
        return $requete->find('nom_sportif like "%'.$params['keywords'].'%" or prenom_sportif like "%'.$params['keywords'].'%"');
    }

}
?>