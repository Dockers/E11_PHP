<?php
class Connexion_model extends model{
    
private $mapper;

function __construct(){
    parent::__construct();
}

public function signin($params){
    return $this->getMapper('sportifs')->load('email_sportif="'.$params['email'].'" && password_sportif="'.$params['password'].'"');
}

public function visiteur(){
    return $this->getMapper('sportifs')->load('nom_sportif="visiteur"');
}

public function inscription($params){
	$club = $this->mapper;
    return $clubs->find('id_club && nom_club');
    $sportifs = $this->mapper;
    return $clubs->find('id_sportif && prenom_sportif && nom_sportif');
}

}
?>