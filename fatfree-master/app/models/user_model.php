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
    // $nom = $this->mapper->find('nom="'.$params['nom'].'"');
    // var_dump('nom : '.$params['nom']);
    // $prenom = $this->mapper->find('prenom="'.$params['prenom'].'"');
    // var_dump('prenom : '.$params['prenom']);
    // $password = $this->mapper->find('password="'.$params['password'].'"');
    // var_dump('mdp : '.$params['password']);
    // $anniversaire = $this->mapper->find('datenaissance="'.$params['anniversaire'].'"');
    // var_dump('anniversaire : '.$params['anniversaire']);
    // $age = $this->mapper->find('age="'.$params['age'].'"');
    // var_dump('age : '.$params['age']);
    // $sexe = $this->mapper->find('sexe="'.$params['sexe'].'"');
    // var_dump('sexe : '.$params['sexe']);
    // $email = $this->mapper->find('email="'.$params['email'].'"');
    // var_dump('mail : '.$params['email']);
    // $photo = $this->mapper->find('photo="'.$params['photo'].'"');
    // var_dump('photo : '.$params['photo']);
    // $classe = $this->mapper->find('classe="'.$params['classe'].'"');
    // var_dump('classe : '.$params['classe']);
    // $dispo = $this->mapper->find('disponibilite="'.$params['dispo'].'"');
    // var_dump('dispo : '.$params['dispo']);
    // $poids = $this->mapper->find('poids="'.$params['poids'].'"');
    // var_dump('poids : '.$params['poids']);
    // $taille = $this->mapper->find('taille="'.$params['taille'].'"');
    // var_dump('taille : '.$params['taille']);
    // $main = $this->mapper->find('main="'.$params['main'].'"');
    // var_dump('main : '.$params['main']);
    // $palmares = $this->mapper->find('palmares="'.$params['palmares'].'"');
    // var_dump('palmares : '.$params['palmares']);
    // $this->mapper->copyFrom('POST');
    $inscrip->save();
    // return $this->mapper->save();
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