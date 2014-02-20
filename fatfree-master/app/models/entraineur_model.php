<?php
class entraineur_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('entraineurs');
     }
  
  function inscriptionEntraineur(){
    $inscrip=$this->mapper;
    $inscrip->copyFrom('POST');
    $inscrip->save();
  }
  
    function searchEntraineurs($params) {
      $requete = $this->mapper;
      return $requete->find('nom_entraineur like "%'.$params['keywords'].'%" or prenom_entraineur like "%'.$params['keywords'].'%"');
    }

}
?>