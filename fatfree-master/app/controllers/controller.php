<?php
class controller{
  
protected $tpl;
protected $model;
protected $content;


  protected function __construct(){
    $model=substr(get_class($this),0,strpos(get_class($this),'_')+1).'model';
    if(class_exists($model)){
      $this->model=new $model();
    } 
  }

  // public function beforeroute($f3){
  //   $model=substr(get_class($this),0,strpos(get_class($this),'_')+1).'model';
  //   if(class_exists($model)){
  //     $this->model=new $model();
  //   } 
  // } 

  // public function afterroute($f3){
  //   $f3->set('content', 'app/views/partials/'.$this->content.'.html');
  //   if($f3->get('AJAX')){
  //     echo View::instance()->render($this->tpl['async']);
  //   }else{
  //     echo View::instance()->render($this->tpl['sync']);
  //   } 
  // }
  
}
?>