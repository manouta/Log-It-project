<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
 require_once("connecter.php");
    //transferer la photo
//on incr le nbr de doc dans la tab ens
 //$req=$bd->prepare('SELECT nbr_doc FROM enseignant where grade IN ()');
                      //      $req->execute(array('num'=>$_POST['user']));
                          //  $donnes=$req->fetch();
                            //$req->closeCursor ();
   if($_POST['choix']=="" AND $_POST['nom']=="" AND $_POST['prenom']=="" AND $_POST['email']=="" AND $_POST['psw']=="" and $_POST['dns']==""  AND $_POST['pic']==""){
   
  echo "<script> alert('some field is empty');</script> ";
  require_once("login_page.html");
}else{
   $photo=$_FILES['pic']['name'];//enregistrer la photo pic dans le dossier qui on va donner un name
   $_file_tmp_name=$_FILES['pic']['tmp_name'];//recuperer le shemain de la photo
   move_uploaded_file($_file_tmp_name,"./images/$photo");
$req=$bd->prepare('INSERT INTO all_users(type_user,nom,prenom,date_de_naissance,mdp,e_mail,photo_pers) VALUES(:type,:nom,:pre,:dns,:psw,:mail,:pic)');
  $req->execute(array(
'type'=>$_POST['choix'],
'nom'=>$_POST['nom'],
'pre'=>$_POST['prenom'],
'dns'=>$_POST['dns'],
'psw'=>$_POST['psw'],
'mail'=>$_POST['email'],
'pic'=>$photo ));
   echo "<script> alert('inscription validé');</script> ";
 require_once("validation.php");

}
?>

