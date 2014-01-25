<?php
$f3=require('../../lib/base.php');
//récupération des données
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$anniversaire= $_POST['anniversaire'];
$poids= $_POST['poids'];
$email= $_POST['email'];
$photo= 'photo';

$db=new DB\SQL('mysql:host=127.0.0.1;port=3306;dbname=php_labagarre','root','');

//Exécution de la requête
//$db->begin();
$f3->set('insert',
        $db->exec("INSERT INTO boxeurs (nom_boxeur, prenom_boxeur, datenaissance_boxeur, photo_boxeur, poids_boxeur, email_boxeur) 
            VALUES ('$nom','$prenom','$anniversaire','$photo','$poids','$email');")
        );
//$db->commit();
echo 'test';
?>