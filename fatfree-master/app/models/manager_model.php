<?php
class manager_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('managers');
     }
  
  function inscriptionManager($f3,$params){
    $inscrip=$this->mapper;

    $inscrip->nom_manager=$params['nom_manager'];
    $inscrip->prenom_manager=$params['prenom_manager'];
    $inscrip->email_manager=$params['email_manager'];
    $inscrip->password_manager=$params['password_manager'];
    $inscrip->sexe_manager=$params['sexe_manager'];
    $inscrip->codepostal_manager=$params['codepostal_manager'];
    $inscrip->naissance_manager=$params['anniversaire_manager'];
    $inscrip->statut_manager=$params['statut_manager'];
    $inscrip->evenements_manager=$params['evenements_manager'];
    $inscrip->experience_manager=$params['experience_manager'];
    $inscrip->photos_manager=$params['photos_manager'];

    $inscrip->save();
  }
  
    function searchManagers($f3, $params) {
      $requete = $this->mapper;
      return $requete->find('nom_manager like "%'.$params['keywords'].'%" or prenom_manager like "%'.$params['keywords'].'%"');
    }

}
?>