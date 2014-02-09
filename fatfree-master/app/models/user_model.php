<?php
class user_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('boxeurs');
     }
  
  function inscription($f3,$params){
    $inscrip=$this->mapper;

    $inscrip->nom=$params['nom'];
    $inscrip->prenom=$params['prenom'];
    $inscrip->password=$params['password'];
    $inscrip->datenaissance=$params['anniversaire'];
    $inscrip->age=$params['age'];
    $inscrip->sexe=$params['sexe'];
    $inscrip->email=$params['email'];
    $inscrip->photo=$params['photo'];
    $inscrip->classe=$params['classe'];
    $inscrip->disponibilite=$params['dispo'];
    $inscrip->poids=$params['poids'];
    $inscrip->taille=$params['taille'];
    $inscrip->main=$params['main'];
    $inscrip->palmares=$params['palmares'];

    $inscrip->save();
  }
  
    function searchSportifs($f3, $params) {
      $requete = $this->mapper;
      return $requete->find('nom like "%'.$params['keywords'].'%"');
    }

}
?>