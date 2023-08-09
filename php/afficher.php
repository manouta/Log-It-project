<?php 
require_once("connecter.php");
$res=$bd->query('SELECT distinct(nom),prenom from fichier ');

 while($dnns = $res->fetch()) {
 	 $req=$bd->prepare('INSERT INTO users(nom,prenom) VALUES (:nom,:prenom)');
       $req->execute(array('nom'=> $dnns['nom'],'prenom'=> $dnns['prenom']));
       
        
     }
    
    