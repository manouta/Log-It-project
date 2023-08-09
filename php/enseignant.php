<?php 
 require_once("connecter.php");
 session_start();
       $req=$bd->prepare('SELECT * FROM users WHERE nom =:user');
       $req->execute(array('user'=> $_SESSION['username']));
       $donnes=$req->fetch();
       $req->closeCursor ();
        $res=$bd->prepare('SELECT * FROM actions where id_user=:id ');
         $res->execute(array('id'=>$_SESSION['username']));
       
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <img src="../images/logoprofile.png" style=" width: 200px;position: relative;left: 7%;">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
  
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="../css/jquery.multiselect.css" rel="stylesheet" type="text/css">


  <div class="wrapper" style=" position: absolute;
  top: 10%;
  left: 90%;
  transform: translate(-50%,-50%);">
  <div class="containe" style=" position: relative;
  padding: 20px 50px;">
    <input type="text" class="input" placeholder="What are you looking for?" style="width: 400px;
  border: 3px solid #fff;
  background: transparent;
  padding: 17px 30px;
  border-radius: 50px;
  outline: none;
  font-size: 18px;
  color: #fff;">
    <input type="button" value="search" class="close-btn" style="
  
  top: -59px;
  left: 46%;
  cursor: pointer;
  color: #fc913a;
  background: #fff;
  border: 0px;
  width: 120px;
  height: 55px;
  border-radius: 50px;
  outline: none;
  text-transform: uppercase;
  font-weight: bold;">
  </div>
</div>
<style type="text/css">


  #modal{
   background-color: #999999;
   width:250%;
   height: 43vh;
   position: absolute;
   top: -150px;
   left: -140%;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
 overflow-y: scroll;
  max-height: 400px;
  padding:0 1em 0 0;
  
  }
   #modalL{
   background-color: #999999;
   width:230%;
   height: 80vh;
   position: absolute;
   top: -190px;
   left: -90PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;

  
  }
   #modal0{
   background-color: #999999;
   width:130%;
   height: 48vh;
   position: absolute;
   top: -70px;
   left: 60PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:2px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  
  
  }

  #modal1{
   background-color: #999999;
   width:250%;
   height: 80vh;
   position: absolute;
   top: -300px;
   left: -90PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 1 1 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  overflow-y: scroll;
  max-height: 400px;
  padding:0 1em 0 0;
  }
  #modal2{
   background-color: #999999;
   width:300%;
   height: 55vh;
   position: absolute;
   top: -90px;
   left: -300%;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }
  #modal11{
   background-color: #999999;
   width:220%;
   height: 80vh;
   position: absolute;
   top: -70px;
   left: -450PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  overflow-y: scroll;
  max-height: 400px;
  padding:0 1em 0 0;
  }
  #modal12{
   background-color: #999999;
   width:220%;
   height: 80vh;
   position: absolute;
   top: -100px;
   left: -450PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  overflow-y: scroll;
  max-height: 400px;
  padding:0 1em 0 0;
  }
  #modal13{
   background-color: #999999;
   width:150%;
   height: 30vh;
   position: absolute;
   top: -70px;
   left: -450PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
 
  }
  #modal14{
   background-color: #999999;
   width:120%;
   height: 20vh;
   position: absolute;
   top: -70px;
   left: -450PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }
   #modal15{
   background-color: #999999;
   width:120%;
   height: 20vh;
   position: absolute;
   top: -70px;
   left: -450PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }
 #modal16{
   background-color: #999999;
   width:40%;
   height: 70vh;
   position: absolute;
   top: 150px;
   left: 50PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }
  #modal17{
   background-color: #999999;
   width:40%;
   height: 20vh;
   position: absolute;
   top: 150px;
   left: 50PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }
  #modal18{
   background-color: #999999;
   width:40%;
   height: 20vh;
   position: absolute;
   top: 150px;
   left: 50PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }
   #modal19{
   background-color: #999999;
   width:40%;
   height: 20vh;
   position: absolute;
   top: 150px;
   left: 50PX;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
  
  }

  #modal6{
   background-color: #fff;
   width:320%;
   height: 200vh;
   position: absolute;
   top: -300px;
   left: -140%;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  border:1px #EEE solid;border-radius:2px;background:#404040;
  -webkit-box-shadow: 0 0 8px #555 inset;box-shadow: 0 0 8px #555 inset;
  -webkit-transition: all .3s ease-out;transition: all .3s ease-out;
 overflow-y: scroll;
  max-height: 400px;
  padding:0 1em 0 0;
  
  }
  .modal__content{
   width: 75%;
   height: 65%;
   background-color: #fff;
   position: absolute;
   top: 10%;
   left: 10%;
   transform: translate(-50%, -50%);
   padding: 2em;
   border-radius: 1em;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
   #modal0:target{
   opacity: 1;
   visibility: visible;
  }
  #modal0:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal6:target{
   opacity: 1;
   visibility: visible;
  }
  #modal6:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modal:target{
   opacity: 1;
   visibility: visible;
  }
  #modal:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modalL:target{
   opacity: 1;
   visibility: visible;
  }
  #modalL:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modal1:target{
   opacity: 1;
   visibility: visible;
  }
  #modal1:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modal2:target{
   opacity: 1;
   visibility: visible;
  }
  #modal2:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modal11:target{
   opacity: 1;
   visibility: visible;
  }
  #modal11:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal12:target{
   opacity: 1;
   visibility: visible;
  }
  #modal12:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal13:target{
   opacity: 1;
   visibility: visible;
  }
  #modal13:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal14:target{
   opacity: 1;
   visibility: visible;
  }
  #modal14:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modal15:target{
   opacity: 1;
   visibility: visible;
  }
  #modal15:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  #modal16:target{
   opacity: 1;
   visibility: visible;
  }
  #modal16:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal17:target{
   opacity: 1;
   visibility: visible;
  }
  #modal17:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal18:target{
   opacity: 1;
   visibility: visible;
  }
  #modal18:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
   #modal19:target{
   opacity: 1;
   visibility: visible;
  }
  #modal19:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  .modal__close{
   color: #ffb700;
   font-size: 2em;
   position: absolute;
   top: .5em;
   right: 1em;
  }
  .modal__heading{
   color: dodgerblue;
   margin-bottom: 1em;
  }
  .modal__paragraph{
   line-height: 1.5em;
  }
.modal-open{
 display: inline-block;
 color: dodgerblue;
 
}
.list-type1{
width:740px;
margin:0 auto;
}

.list-type1 ol{
counter-reset: li;
list-style: none;
*list-style: decimal;
font-size: 15px;
font-family: 'Raleway', sans-serif;
padding: 0;
margin-bottom: 4em;
}
.list-type1 ol ol{
margin: 0 0 0 2em;
}

.list-type1 a{
position: relative;
display: block;
padding: .4em .4em .4em 2em;
*padding: .4em;
margin: .5em 0;
background:#ffb700;
color: #000;
text-decoration: none;
-moz-border-radius: .3em;
-webkit-border-radius: .3em;
border-radius: 10em;
transition: all .2s ease-in-out;
}

.list-type1 a:hover{
background: #d6d4d4;
text-decoration:none;
transform: scale(1.1);
}

.list-type1 a:before{
content: counter(li);
counter-increment: li;
position: absolute;
left: -1.3em;
top: 50%;
margin-top: -1.3em;
background:#ffb700;
height: 3em;
width: 3em;
line-height: 2em;
border: .3em solid #404040;
text-align: center;
font-weight: bold;
-moz-border-radius: 2em;
-webkit-border-radius: 2em;
border-radius: 2em;
color:#FFF;
}
 button{

  font-size: 40px;
  margin: 7px auto;
  padding:4px;
  height: 90px;
  width: 90px;
  border: 1px solid white;
  border-radius:50%;
    position: relative;
       right: 56%;
       background-color: transparent;
         }


   input {  width: 390px;
  border: 3px solid #fff;
  background: transparent;
  padding: 15px 30px;
  border-radius: 50px;
  outline: none;
  font-size: 18px;
  color: #fff;
        position: relative;
        left: -22%;

         }

     
#checkbox-dropdown-container {
  background: #ffb700;
  padding: 20px;
}
.custom-select {
    background: #FFF url(downward-arrow.png) no-repeat center right 10px;
    display: inline-block;
    padding: 5px 15px;
    border: #80b2bb 1px solid;
    color: #3892a2;
    border-radius: 2px;
    width: 100%;
    cursor:pointer;
    
}
div#custom-select-option-box {
    background: #FFF;
    border: #80b2bb 1px solid;
    color: #3892a2;
    border-radius: 2px;
    width: 100%;
    z-index:1;
    display:none;
}
button.search.btn {
    background: #4c4c4c;
    border: #353535 1px solid;
    color: #ffffff;
    border-radius: 2px;
    height: 30px;
    margin-top: 20px;
    font-size: 0.9em;
}
.custom-select-option {
    width: 100%;
    padding: 5px 15px;
    margin: 1px 0px;
    cursor: pointer;
}
.custom-select-option:hover {
    
}
.result-list {
    padding-bottom: 20px;
    color: #4d4d4d;
    line-height: 25px;
}
.result-list-heading {
    font-style: italic;
    color: #717171;
    text-decoration: underline;
}
 
canvas
    { 
    border:2px solid #f10000;
    }

</style>
<script type="text/javascript">
  const checkboxes = document.querySelectorAll('input[type="checkbox"]')
//step 1: keep track of last checked box
//step 2: is shiftkey down?
    //if yes, check everyhing in btw
      //loop through all boxes again and check all in between
    //if no, just check current box

let lastChecked; //keep track of last checked box

function handleCheck(e){
  let inBetween = false; 
  if (e.shiftKey === true){
    checkboxes.forEach(item => {
       //keep track of in between boxes by toggling inBetween to be true for all boxes in between, and then toggle it back to false after. If you dont understand, go through line by line what happen to each box when click and shift.
       if (item === this || item === lastChecked){
         inBetween = !inBetween;
       }
       //check every box in between
       if (inBetween){
         item.checked = true;
       }
    })
  }
  
  lastChecked = this //keep track of last checked box
}

checkboxes.forEach(item => item.addEventListener('click', handleCheck));
</script>
</head>
<body>
  <div class="container">
  	<div class="services" style="position :relative; top:-40px">
  	 <h1><?php echo ('Enseignant ').$donnes['nom']; ?></h1>
  	</div>
    <h5 style="position: relative;top: -130px;left: 45%;"> <a href="../login_page.html" style="color:#ffb700; "> Deconnecter <i class="fa fa-sign-out fa-2x"></i></a></h5>
  	<div class="row" style="position:relative;top:-80px">


         <div class="col-md-3 text-center" >
  			

  			<div  style="font-size: 40px;
  margin: 8px auto;
  padding:4px;
  height: 70px;
  width: 70px;
 
  border-radius:60%;">
  			  <img src="../images/avatar.jpg" style=" width: 115%;
    border-radius: 125%;">
  			</div>	
  				<h3><a href="#modal0" class="modal-open" style="color: #ffb700;">Profile personnel</a></h3>
        
        
       <div class="#modal0" id="modal0">
    <div  style="font-size: 40px;
                       margin: 8px auto;
                       padding:4px;
                       height: 70px;
                       width: 70px;
                       border-radius:60%;">
         <img src="avatar.jpg" style=" width: 165%;
    border-radius: 155%;position: relative;top: -65px;    border: 2px white solid;">
        </div>
    <div id="modal__content">

      <a href="#" class="modal__close">&times;</a>
    

    <h3 style="color: #ffb700;text-align: center;"> <i class="fa fa-id-card-o" aria-hidden="true"></i> Informations Personnel </h3><br>
          <h6 style="position: relative;left: 10%;">NOM    :  <?php echo "  ".$_SESSION['username'].""; ?></h6>
              <h6 style="position: relative;left: 10%;">PRENOM    :  <?php echo "  ".$donnes['prenom'].""; ?></h6>
                 <h6 style="position: relative;left: 10%;">MOT DE PASSE    :  <?php echo "  ".$donnes['mdp'].""; ?><a href="#modal16" style="color: grey;position: relative;left: 30%;"> modifier</a></h6>
                  
      </div></div></div>
<div class="#modal16" id="modal16">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
    
           <form class="form-horizontal" action="#verifierpsw" method="post">
<h3 style="color: #ffb700;text-align: center;">Modifier votre mot de pass !</h3>

<div class="input-row">
   <input type="text" placeholder="Ancien mot de pass" name="psw1" style="position: relative;top: 100px;width: 400px;height: 10px;border: 2px solid #fff;">
              <br><br>
      <input type="password" placeholder="Nouveau mot de pass" id="psw2" name="psw2" style="position: relative;top: 100px;width: 400px;height: 10px;border: 2px solid #fff;"> 
                       
 <br><br><br> <input type="submit" value="modifier" style="position: relative;top: 100px;left: 25%;width: 200px;height: 45px;"> 
                       
          
 <div class="#verifierpsw" id="verifierpsw">
  <script>
   ppsw2=document.getElementById(psw2);
 
              <?php 
                 $req=$bd->prepare('UPDATE users SET mdp=:nv_psw where nom=:nom');
                 $req->execute(array('nv_psw'=>$_POST['psw2'] ,'nom'=>$donnes['nom'] ));
              ?>
               </script>
            </div>
</div>
</form>
 
 
      
</div>
</div>

 <div  style="border-left: 3px solid white;
  height: 270px;
  position: absolute;
  left: 25%;
  margin-left: 7px;
  top: 85px;"></div>
  		<div class="col-md-3 text-center">
  			

  			<div class="icon">
  				<i class="fa fa-file-text " ></i><br></br>
  			</div>	
  			    <h3><a href="#modalL" style="color: #ffb700;">Importer fichier log</a></h3>
  				<p> tu dois  importer un fichier log pour suivre les parcours des apprenants. </p>
  			<div class="#modalL" id="modalL">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
     
      

 <div class="container">
    <div class="services">
      <br><br><br>
      <h1 style="position: relative;left: -20%;color: #ffb700;">Importer fichier log !</h1>
    
<br><br>
            
           <form class="form-horizontal" action="#lirefichier" method="post"
                          name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">

<div class="input-row">

 <input type="file" name="file" id="file" accept=".csv" placeholder="aucune selection"> 
 <br><br><button type="submit" id="submit" name="import"
> <i class="fa fa-download " ></i></button>

</div>
</form>
</div>
</div>
<div class="#lirefichier">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">

$(document).ready(function() {
$("#frmCSVImport").on("submit", function () {
$("#response").attr("class", "");
$("#response").html("");
var fileType = ".csv";
var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
if (!regex.test($("#file").val().toLowerCase())) {
$("#response").addClass("error");
$("#response").addClass("display-block");
$("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
return false;
}
return true;
});
});
</script>
<?php  
require_once("connecter.php");

$nom="";
$date="";
$co=0;
if (isset($_POST["import"])) {

$fileName = $_FILES["file"]["tmp_name"];

if ($_FILES["file"]["size"] > 0) {

$file = fopen($fileName, "r");




while (($column = fgetcsv($file, 10000, ";"))!==false) { 

if($column[5]=="Peltier"){



$reqq=$bd->prepare('INSERT  INTO cours (nom_cour,nom_ens) values (:nom,:nome)');
$reqq->execute(array( 'nom' => $column[0] ,'nome' => $column[5]  ));


}else{


$req=$bd->prepare('INSERT INTO users (type,nom,prenom,mdp) values (:type,:nom,:prenom,:mdp)');
$req->execute(array('type' =>"app" ,'nom' => $column[5] ,'prenom' => $column[4] , 'mdp' => $column[5]));



}

if($column[1]!==$date){
  

$co++;

$req=$bd->prepare(' SELECT id_user FROM users WHERE nom=:nom  ');
$req->execute(array('nom'=>$column[5]));
$reqq=$req->fetch();

$req=$bd->prepare(' INSERT INTO sessions (id_session,id_user) values(:id,:user) ');
$req->execute(array('id'=>$co,'user'=>$reqq['id_user']));


$req=$bd->prepare('INSERT INTO actions (id_session,nom_action,id_user,date_action,heure,resource,adresse_IP) values (:id,:nom,:nom_user,:date_action,:heure,:resource,:adresse_IP)');
$req->execute(array('id'=>$co,'nom' =>$column[6] ,'nom_user' =>$column[5],'date_action' => $column[1] ,'heure' => $column[2] , 'resource' => $column[7] ,'adresse_IP'  => $column[3]  ));


  

$date=$column[1];

}else{

$req=$bd->prepare('INSERT INTO actions (id_session,nom_action,id_user,date_action,heure,resource,adresse_IP) values (:id,:nom,:nom_user,:date_action,:heure,:resource,:adresse_IP)');
$req->execute(array('id'=>$co,'nom' =>$column[6] ,'nom_user' =>$column[5],'date_action' => $column[1] ,'heure' => $column[2] , 'resource' => $column[7] ,'adresse_IP'  => $column[3]  ));

}

//$req=$bd->query(' SELECT id_session,id_user FROM actions ');
//$res=$req->fetch();
//$req=$bd->prepare(' SELECT id_user FROM users WHERE nom=:nom  ');
//$req->execute(array('nom'=>$res['id_user']));
//$reqq=$req->fetch();

}

}
}
 
?>


 <div class="#modal15" id="modal15">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      
      <p>bien importer</p>

    </div>
 </div>

</div>
    </div>
 </div>
  		</div>
  		<div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-files-o " ></i><br></br>
  			</div>	
  				<h3><a href="extraire.php" style="color: #ffb700;">Extraire parcours</a></h3>
  				<p> tu dois  importer un fichier log pour suivre les parcours des apprenants. </p>
  


  		</div>


       	<div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-question " ></i><br></br>
  			</div>	
  				<h3><a href="#modal2" style="color: #ffb700;">Interroger parcours</a></h3>
  				<p> tu dois  importer un fichier log pour suivre les parcours des apprenants. </p>
 <div class="#modal2" id="modal2">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
   <h2 class="modal__heading" style="color: #ffb700;"> Creat your request !</h2>
      <h3 ><a href="#modal0" style="color: white;">profile </a><a href="" style="color: transparent;">amianaaa </a><a href="extraire.php" style="color: white;">parcours </a><a href="" style="color: transparent;">amianaaa </a><a href="#modal1"  style="color: white;">sessions</a></h3>
<div class="list-type1">
<ol>
<li><a href="#modal11">Voulez vous voir vos actions ?</a></li>
<li><a href="#modal12">temps de vos actions !</a></li>
<li><a href="#modal13">votre addresse IP</a></li>
<li><a href="#modal14">Les cours qui vous avez proposé avant !</a></li>
<li><a href="#modal15">Voulez vous voir la liste des apprenants ?</a></li>
<li><a href="#modal6">Voulez vous voir l'avancement des apprenants ?</a></li>
</ol>
</div>
 

    </div>
 </div>

 <div class="#modal11" id="modal11">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-list " ></i>  Actions </h2>
      
       <table border="4" width="100%">
        <tr>
        <th>action </th><th>resource </th>
          </tr>
          <?php 
          $res=$bd->prepare('SELECT * FROM actions where id_user=:id ');
         $res->execute(array('id'=>$_SESSION['username']));
          while(  $donne=$res->fetch()) {?>
          <tr>
            <td><?php echo($donne['nom_action']) ?></td>
            <td><?php echo($donne['resource']) ?></td>

          </tr>
        <?php } $res->closeCursor(); ?>
      </table>

    </div>
 </div>


 <div class="#modal12" id="modal12">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-list " ></i>  Actions avec date et heure</h2>
      
       <table border="4" width="100%">
        <tr>
        <th>action </th><th>date </th><th>heure</th>
          </tr>
          <?php 
          $res=$bd->prepare('SELECT * FROM actions where id_user=:id ');
         $res->execute(array('id'=>$_SESSION['username']));
          while(  $donne=$res->fetch()) {?>
          <tr>
             <td><?php echo($donne['nom_action']) ?></td>
             <td><?php echo ($donne['date_action'] )  ?></td>
            <td><?php echo($donne['heure']) ?></td>
            

          </tr>
        <?php } $res->closeCursor(); ?>
      </table>

    </div>
 </div>



 <div class="#modal13" id="modal13">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-list " ></i> Votre adresse IP</h2>
      
       <table border="4" width="50%" style="position:relative;left: 30%;">
        <tr>
        <th>Adresse IP </th>
          </tr>
          <?php 
          $res=$bd->prepare('SELECT adresse_IP FROM actions where id_user=:id ');
         $res->execute(array('id'=>$_SESSION['username']));
          $donne=$res->fetch();
         ?>
          <tr>
             <td><?php echo($donne['adresse_IP']) ?></td>
            
          </tr>
        <?php  $res->closeCursor(); ?>
      </table>

    </div>
 </div>




 <div class="#modal14" id="modal14">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-list " ></i> Les cours</h2>
      
       <table border="4" width="50%" style="position:relative;left: 30%;">
        <tr>
        <th>nom du  cour </th>
          </tr>
          <?php 
          $res=$bd->query('SELECT nom_cour FROM cours  ');
          $donne=$res->fetch();
         ?>
          <tr>
             <td><?php echo $donne['nom_cour']; ?></td>
            
          </tr>
        <?php  $res->closeCursor(); ?>
      </table>

    </div>
 </div>




 </div>

  		 <div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-university " ></i><br></br>
  			</div>	
  				<h3><a href="http://elearning.univ-constantine2.dz/"  style="color: #ffb700;">e-learning</a></h3>
  				
  			
  		</div>
       
       

  		<div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-server " ></i><br></br>
  			</div>	
  				<h3><a href="#modal1" style="color: #ffb700;">Identifier session</a></h3>
  				<p> tu dois  importer un fichier log pour suivre les parcours des apprenants. </p>
  			
 <div class="#modal1" id="modal1">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-server " ></i>  sessions</h2>
      
      <?php

          $date="";
          $co=0;
          $req=$bd->prepare(' SELECT * FROM actions WHERE id_user=:id ');
          $req->execute(array('id'=> $_SESSION['username']));
            while(  $donne=$req->fetch()) {
          if($donne['date_action']!==$date){
            ?>
            </table>
          <?php
          $co++;
           $date=$donne['date_action']; ?>
       
      <legend>
      <h3 style="color: white;">session<?php echo $co ; ?></h3>
      </legend>
       <table border="4" width="100%">
        <tr >
          <th>date </th><th>heure </th><th>action </th><th>resource </th>
          </tr>
          <tr>
            <td><?php echo ($donne['date_action'] )  ?></td>
            <td><?php echo($donne['heure']) ?></td>
            <td><?php echo($donne['nom_action']) ?></td>
            <td><?php echo($donne['resource']) ?></td>

          </tr>
        <?php  }else{ ?>
           <tr>
            <td><?php echo ($donne['date_action'] )  ?></td>
            <td><?php echo($donne['heure']) ?></td>
            <td><?php echo($donne['nom_action']) ?></td>
            <td><?php echo($donne['resource']) ?></td>

          </tr>
       <?php }

      } $res->closeCursor(); ?>
      </table>

    </div>
 </div>

  		</div>

  		<div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-line-chart " ></i><br></br>
  			</div>	
  				<h3><a href="#modal6" style="color: #ffb700;">Calculer statistique</a></h3>
  				<p> tu dois  importer un fichier log pour suivre les parcours des apprenants. </p>
  			
 <div class="#modal6" id="modal6" style="background-color: white;">
   <div id="modal__content" style="background-color: white;">
      <a href="#" class="modal__close">&times;</a>
      <h4>les calcules statistique</h4>
      
   <?php include('../html/graphe.html');include('../html/graphe2.html') ?>

 </div>
  		</div>

       

  	</div>
  </div>
</body>
</html>


<script>
  $("#custom-select").on("click",function(){
    $("#custom-select-option-box").toggle();
  });
  function toggleFillColor(obj) {
    $("#custom-select-option-box").show();
    if($(obj).prop('checked') == true) {
      $(obj).parent().css("background",'#c6e7ed');
    } else {
      $(obj).parent().css("background",'#FFF');
    }
  }
  $(".custom-select-option").on("click", function() {
    var checkboxObj = $(this).children("input");
    $(checkboxObj).prop("checked",true);
    toggleFillColor(checkboxObj);
  });
    
  $("body").on("click",function(e){
    if(e.target.id != "custom-select" && $(e.target).attr("class") != "custom-select-option") {
      $("#custom-select-option-box").hide();
    }
  });
  </script>
