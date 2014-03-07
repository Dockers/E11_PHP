<?php
class controller{
  
protected $tpl;
protected $model;


  protected function __construct(){
    $f3=\Base::instance();
    if( ($f3->get('PATTERN')!='/connexion' && !$f3->get('SESSION.id')) && ($f3->get('PATTERN')!='/inscription' && !$f3->get('SESSION.id')) && ($f3->get('PATTERN')!='/formInscriptionSportif' && !$f3->get('SESSION.id')) && ($f3->get('PATTERN')!='/formInscriptionEntraineur' && !$f3->get('SESSION.id')) && ($f3->get('PATTERN')!='/formInscriptionManageur' && !$f3->get('SESSION.id')) ){
      $f3->reroute('/connexion');
    }
  }
  
  public function beforeroute($f3){
    $model=substr(get_class($this),0,strpos(get_class($this),'_')+1).'model';
    if(class_exists($model)){
      $this->model=new $model();
    } 
  } 

  public function afterroute($f3){
    $mimeTypes=array('html'=>'text/html','json'=>'application/json');
    $tpl=$f3->get('AJAX')?$this->tpl['async']:$this->tpl['sync'];
    $ext=substr($tpl,strrpos($tpl,'.')+1);
    $mime=$mimeTypes[$ext];
    echo View::instance()->render($tpl,$mime);
  } 
  
}
?>