<?php
class Messagerie_model extends model{
    
    private $mapper;

    function __construct(){
        parent::__construct();
        $this->mapper=$this->getMapper('messagerie');
     }
  
  function envoie($params){
    $envoie=$this->mapper;
    $envoie->auteur_message=$params['auteur_message'];
    $envoie->copyFrom('POST');
    $envoie->save();
  }
}
?>