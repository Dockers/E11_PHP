<?php

class Messagerie_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

  	public function messagerie($f3){
  		$this->tpl['sync']='messagerie.html';
  	}

	function envoie($f3){
		$f3->set('envoieMessage',$this->model->envoie(array(
			'auteur_message'=>$f3->get('SESSION.id')
			)
		));
		echo View::instance()->render('messagerie.html');
	}

}


?>