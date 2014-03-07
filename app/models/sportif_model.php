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
  
    function searchDefault(){
        $requete = $this->mapper;
        return $requete->find('nom_sportif like "%%" ');
    }

    function searchSportifs($params) {
        $requete = $this->mapper;
        return $requete->find('poids_sportif between '.$params['poids_min'].' and '.$params['poids_max'].' && taille_sportif between '.$params['taille_min'].' and '.$params['taille_max'].' && sport_sportif="'.$params['sport'].'";');
    }

}
?>