<?php
class club_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('clubs');
     }
  
  function creationCLub($f3,$params){
    $inscrip=$this->mapper;

    $inscrip->nom_club=$params['nom_club'];
    $inscrip->email_club=$params['email_club'];
    $inscrip->password_club=$params['password_club'];
    $inscrip->annee_club=$params['annee_club'];
    $inscrip->ville_club=$params['ville_club'];
    $inscrip->sport_club=$params['sport_club'];
    $inscrip->images_club=$params['images_club'];

    $inscrip->save();
  }
  
    function searchClubs($f3, $params) {
      $requete = $this->mapper;
      return $requete->find('nom_club like "%'.$params['keywords'].'%"');
    }

}
?>