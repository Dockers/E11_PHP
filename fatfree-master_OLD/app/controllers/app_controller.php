<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of app_controller
 *
 * @author Victor
 */
class app_controller {
    
  function __construct(){
    
  }
  
  function home(){
    echo View::instance()->render('index.html');
  }
  
  /*function getUsers($f3){
    $model=new App_model();
    $f3->set('users',$model->getUsers($f3,array('alpha'=>$f3->get('PARAMS.alpha'))));
    
    if($f3->get('AJAX')){
      echo View::instance()->render('partials/users.html');
    }else{
      echo View::instance()->render('main.html');
    }
  }*/
  
  function inscriptionBoxeur($f3){
    $insert=new DB\SQL\Mapper($f3->get('dB'),'boxeurs');
    $f3->set('insert',
        $insert->exec("INSERT INTO boxeurs (nom_boxeur, prenom_boxeur, datenaissance_boxeur, photo_boxeur, poids_boxeur, email_boxeur) 
            VALUES ('$nom','$prenom','$anniversaire','$photo','$poids','$email');")
        );
  }
}

?>
