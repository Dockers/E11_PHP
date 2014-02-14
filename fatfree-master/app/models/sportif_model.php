<?php
class sportif_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('sportifs');
     }
  
  function inscriptionSportif($f3,$params){
    $inscrip=$this->mapper;

    $inscrip->nom_sportif=$params['nom_sportif'];
    $inscrip->prenom_sportif=$params['prenom_sportif'];
    $inscrip->email_sportif=$params['email_sportif'];
    $inscrip->password_sportif=$params['password_sportif'];
    $inscrip->sexe_sportif=$params['sexe_sportif'];
    $inscrip->codepostal_sportif=$params['codepostal_sportif'];
    $inscrip->naissance_sportif=$params['anniversaire_sportif'];
    $inscrip->statut_sportif=$params['statut_sportif'];
    $inscrip->sport_sportif=$params['sport_sportif'];
    $inscrip->classe_sportif=$params['classe_sportif'];
    $inscrip->poids_sportif=$params['poids_sportif'];
    $inscrip->taille_sportif=$params['taille_sportif'];
    $inscrip->club_sportif=$params['club_sportif'];
    $inscrip->palmares_sportif=$params['palmares_sportif'];
    $inscrip->lateralite_sportif=$params['lateralite_sportif'];
    $inscrip->victoires_sportif=$params['victoires_sportif'];
    $inscrip->defaites_sportif=$params['defaites_sportif'];
    $inscrip->matchsnuls_sportif=$params['matchsnuls_sportif'];
    $inscrip->images_sportif=$params['images_sportif'];
    $inscrip->videos_sportif=$params['videos_sportif'];

    $inscrip->save();
  }
  
    function searchSportifs($f3, $params) {
      $requete = $this->mapper;
      return $requete->find('nom_sportif like "%'.$params['keywords'].'%" or prenom_sportif like "%'.$params['keywords'].'%"');
    }

}
?>