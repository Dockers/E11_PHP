<?php
class Connexion_model extends model{
    
private $mapper;

function __construct(){
    parent::__construct();
}

public function signin($params){
    return $this->getMapper('sportifs')->load('email_sportif="'.$params['email'].'"');
}

}
?>