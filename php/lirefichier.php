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

session_start();
$nom="";
$date="";
$co=0;
if (isset($_POST["import"])) {

$fileName = $_FILES["file"]["tmp_name"];

if ($_FILES["file"]["size"] > 0) {

$file = fopen($fileName, "r");




while (($column = fgetcsv($file, 10000, ";"))!==false) { 

if($column[5]=="Peltier"){

$req=$bd->prepare('INSERT INTO users (type,nom,prenom,mdp) values (:type,:nom,:prenom,:mdp) ');
$req->execute(array('type' =>"ens" , 'nom' => $column[5] , 'prenom' => $column[4] , 'mdp' => $column[5]));


$reqq=$bd->prepare('INSERT INTO cours (nom_cour,nom_ens) values (:nom,:name)');
$reqq->execute(array( 'nom' => $column[0] ,'name' => $column[5]  ));


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


}

}
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <style type="text/css" id="dcoder_stylesheet">
 body {
        background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(img7.jpg);
        background-size: cover;
        background-position: center;
        color: #FFF !important;
        height: 100vh;
	    	background-repeat:no-repeat;
	    width: 100%;  
	   	display: flex; 	
	 	justify-content: center; 
	 	align-items: center; 	
	 	flex-direction: column; 	
	 	font-family: 'Montserrat', sans-serif; 	 	
	 	margin: -20px 0 50px; 
	 }
	 h1:before{

	content: '';
	background: white;
	display: block;
	width: 400px;
	height: 3px;
	margin: 10px auto;
	
	 }
	 h1:after{

	content: '';
	background: white;
	display: block;
	width: 300px;
	height: 3px;
	margin: 10px auto;
	
	 }
	
	 button{
   	   border-radius: 20px; 	
   	   border: 1px solid #FF4B2B; 	
   	   background-color: #FF4B2B; 	
   	   color: #FFFFFF; 	
   	   font-size: 12px; 	
   	   font-weight: bold; 	
   	   padding: 12px 45px; 	
   	   letter-spacing: 1px; 	
   	   text-transform: uppercase; 	
   	   transition: transform 80ms ease-in; 
   	   

   	}
button a {text-decoration-color:#FF4B2B;
           color: white; }
   button:active { 	transform: scale(0.95); }
   button:focus { 	outline: none; }

   button.ghost { 	
   	  background-color: transparent; 
      border-color: #FFFFFF;

       }
       
       }
	</style>
</head>
<body>
	
	<h1>SUCCESFULY IMPORTED !</h1>
	<p>your file csv extension correctly inserted Now ! you can</p>
	<p> extract your informations  </p>
	<form action="profile.php">
		<br>
	<button >GO BACK </button>
	</form>
</body>
</html>