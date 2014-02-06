<?php
class user_model extends model{
    
    function __construct(){
        parent::__construct();
     }
  
  function inscription($params){
    $nom = $this->getMapper('test')->find('nom="'.$params['nom'].'" ');
    $this->getMapper('test')->copyFrom('POST');
    return $this->getMapper('test')->save();
  }

  // function inscription($f3, $params){
  //   $firstname = $this->mapper->find('firstname="'.$params['firstname'].'" ');
  //   $lastname = $this->mapper->find('lastname="'.$params['lastname'].'" ');
  //   $email = $this->mapper->find('email="'.$params['email'].'" ');
  //   $password = $this->mapper->find('password="'.$params['password'].'" ');
  //   $sexe = $this->mapper->find('sexe="'.$params['sexe'].'" ');
  //   $birthday = $this->mapper->find('birthday="'.$params['birthday'].'" ');
  //   $level = $this->mapper->find('level="'.$params['level'].'" ');
  //   $available = $this->mapper->find('available="'.$params['available'].'" ');
  //   $picture = $this->mapper->find('picture="'.$params['picture'].'" ');
  //   $weight = $this->mapper->find('weight="'.$params['weight'].'" ');
  //   $height = $this->mapper->find('height="'.$params['height'].'" ');
  //   $hand = $this->mapper->find('hand="'.$params['hand'].'" ');
  //   $history = $this->mapper->find('history="'.$params['history'].'" ');
  //   $error = false;
  //   //On efface les messages d'erreurs
  //   $f3->clear('SESSION.error');

  //   // Vérifier que les deux mots de passe correspondent 
  //   if ( md5($params['password']) != md5($params['passwordConfirm']) ) {
  //       $error = true;
  //       $f3->set('SESSION.error.PasswordConfirm', 'Les deux mots de passe ne correspondent pas');
  //   } 

  //    //Vérifier si l'email n'existe pas déjà dans la base de donnée
  //   if(count($email) == 1) {
  //      $error = true; 
  //      $f3->set('SESSION.error.EmailExist', "Un compte existe déjà avec cet email");
  //   } 

  //   // Si il n'y a pas d'erreur
  //   if($error==false) {
  //       $this->mapper->copyFrom('POST');
  //       $this->mapper->password=sha1($params['password']);
  //       return $this->mapper->save();   
  //   }
  //  }

    function getUser($f3, $params) {
        return $this->mapper->load('username = "'.$params['username'].'"');

    }

}
?>