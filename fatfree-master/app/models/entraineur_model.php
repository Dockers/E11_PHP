<?php
class entraineur_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('entraineurs');
     }
  
  function inscriptionEntraineur($f3,$params){
    $inscrip=$this->mapper;

    $inscrip->nom_entraineur=$params['nom_entraineur'];
    $inscrip->prenom_entraineur=$params['prenom_entraineur'];
    $inscrip->email_entraineur=$params['email_entraineur'];
    $inscrip->password_entraineur=$params['password_entraineur'];
    $inscrip->sexe_entraineur=$params['sexe_entraineur'];
    $inscrip->codepostal_entraineur=$params['codepostal_entraineur'];
    $inscrip->naissance_entraineur=$params['anniversaire_entraineur'];
    $inscrip->statut_entraineur=$params['statut_entraineur'];
    $inscrip->sport_entraineur=$params['sport_entraineur'];
    $inscrip->diplome_entraineur=$params['diplome_entraineur'];
    $inscrip->club_entraineur=$params['club_entraineur'];
    $inscrip->palmares_entraineur=$params['palmares_entraineur'];
    $inscrip->images_entraineur=$params['images_entraineur'];
    $inscrip->videos_entraineur=$params['videos_entraineur'];
    $inscrip->boxeurs_entraineur=$params['boxeurs_entraineur'];

    $inscrip->save();
  }
  
    function searchEntraineurs($f3, $params) {
      $requete = $this->mapper;
      return $requete->find('nom_entraineur like "%'.$params['keywords'].'%" or prenom_entraineur like "%'.$params['keywords'].'%"');
    }

}
?>