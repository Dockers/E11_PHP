<?php

class Connexion_controller extends controller{
    
  public function __construct(){
    parent::__construct();
  }

  public function signin($f3){
    switch($f3->get('VERB')){
      case 'GET':
        $this->tpl['sync']='login.html';
        break;
      case 'POST':
        $auth=$this->model->signin(array(
          'email'=>$f3->get('POST.email'),
          'password'=>$f3->get('POST.password')
          ));
        if(!$auth){
          $f3->set('error',$f3->get('loginError'));
          $this->tpl['sync']='login.html';
        }else{
          $user=array(
            'id'=>$auth->id_sportif,
            'nom'=>$auth->nom_sportif,
            'prenom'=>$auth->prenom_sportif
          );
          $f3->set('SESSION',$user);
          $f3->reroute('/app/views/home.html');
        }
      break;
      }
    }

  public function signout($f3){
    // $f3->clear('SESSION.id');
    session_destroy();
    $f3->reroute('/connexion');
  }

  public function inscription($f3){
     $this->tpl['sync']='inscription.html';
  }

  public function visiteur($f3){
    $auth=$this->model->visiteur();
    if(!$auth){
          $f3->set('error',$f3->get('loginError'));
          $this->tpl['sync']='login.html';
    }else{
    $user=array(
            'id'=>$auth->id_sportif,
            'nom'=>$auth->nom_sportif,
            'prenom'=>$auth->prenom_sportif
          );
    $f3->set('SESSION',$user);
    $f3->reroute('/app/views/home.html');
    }
  }

}


?>