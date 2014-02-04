<?php

class user_controller{
    
  public function __construct(){
    // $this->tpl=array('sync'=>'main.html');
  }
  
  function home(){
    echo View::instance()->render('inscription.html');
  }
  
/*--------------------------------------
------- INSCRIPTION / CONNEXION --------
--------------------------------------*/

  // Inscription
  function inscription($f3){
      $userPost= array();
      if( ($f3->exists('POST.firstname')) || ($f3->exists('POST.lastname')) || ($f3->exists('POST.email')) ||($f3->exists('POST.password')) || ($f3->exists('POST.passwordConfirm')) || ($f3->exists('POST.sexe')) || ($f3->exists('POST.birthday')) || ($f3->exists('POST.level')) || ($f3->exists('POST.available')) || ($f3->exists('POST.picture')) || ($f3->exists('POST.weight')) || ($f3->exists('POST.height')) || ($f3->exists('POST.hand')) || ($f3->exists('POST.history'))) { 
          //Création de l'utilisateur
            $this->model->createUser(
              $f3, 
              array(
                'firstname'=>$f3->get('POST.firstname'),
                'lastname'=>$f3->get('POST.lastname'),
                'email'=>$f3->get('POST.email'),
                'password'=>$f3->get('POST.password'),
                'passwordConfirm'=>$f3->get('POST.passwordConfirm'),
                'sexe'=>$f3->get('POST.sexe'),
                'birthday'=>$f3->get('POST.birthday'),
                'level'=>$f3->get('POST.level'),
                'available'=>$f3->get('POST.available'),
                'picture'=>$f3->get('POST.picture'),
                'weight'=>$f3->get('POST.weight'),
                'height'=>$f3->get('POST.height'),
                'hand'=>$f3->get('POST.hand'),
                'history'=>$f3->get('POST.history')
              )
            );

            $errorPasswordConfirm = $f3->get('SESSION.error.PasswordConfirm');
            if(isset($errorPasswordConfirm) ) {
              echo $f3->get('SESSION.error.PasswordConfirm');
            }

             $errorEmailExist = $f3->get('SESSION.error.EmailExist');
            if(isset($errorEmailExist) ) {
              echo $f3->get('SESSION.error.EmailExist');
            }
      }
      echo View::instance()->render('main.html');
    }
}


?>