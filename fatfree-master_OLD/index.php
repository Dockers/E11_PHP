<?php
$f3=require ('lib/base.php');
$f3->config('config/config.ini');
$f3->config('config/routes.ini');

$db=new DB\SQL('mysql:host=127.0.0.1;port=3306;dbname=php_labagarre','root','');

?>
<a href="app/views/inscription.html">Inscription Boxeur</a>