<?php

  require_once("connecter.php");

session_start();
$_SESSION['username']=$_POST['username'];


    $reponse=$bd->query('SELECT * FROM users ');
  while ($allusers = $reponse->fetch()){
    	
             
             	if ($_POST['username'] == $allusers['nom'] ){

             	  $req=$bd->prepare('SELECT * FROM users WHERE nom =:user');
                            $req->execute(array('user'=>$_POST['username']));
                            $donnes=$req->fetch();


                             if($_POST['psw'] == $donnes['mdp']){

                            if( $donnes['nom']=="Peltier"){header("location:enseignant.php");

                        }elseif( $donnes['nom']=="chouarfa"){header("location:admin.php");

                      }else{header("location:apprenant.php");}

                 	}  	}else{require_once("../html/error_login.html");}

  }
 
?>

 