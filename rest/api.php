<?php

namespace REST;

abstract class api{
  
protected $tpl;
  
  abstract function get($f3);
  
  abstract function post($f3);
  
  abstract function put($f3);
  
  abstract function delete($f3);
  
  function beforeroute($f3){
   $f3->set('ONERROR',function($f3){
     print_r($f3->get('ERROR'));
     $f3->set('header',$f3->get('ERROR'));
     echo \View::instance()->render('json/users.json','application/json');
   });
  }
  
  function afterroute(){
    $f3->set('header',array('code'=>200,'status'=>'OK','text'=>''));
    echo \View::instance()->render($this->tpl,'application/json');
  }
  
}

?>