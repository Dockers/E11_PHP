<?php
class controller{
  
protected $tpl;
protected $model;
protected $content;

  public function beforeroute($f3){
    $model=substr(get_class($this),0,strpos(get_class($this),'_')+1).'Model';
    if(class_exists($model)){
      $this->model=new $model();
    } 
  } 

  public function afterroute($f3){
    $f3->set('content', 'app/Views/content/'.$this->content.'.html');
    if($f3->get('AJAX')){
      echo View::instance()->render($this->tpl['async']);
    }else{
      echo View::instance()->render($this->tpl['sync']);
    } 
  }
  
}
?>