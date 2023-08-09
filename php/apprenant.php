<?php

 require_once("connecter.php");
 session_start();
       $req=$bd->prepare('SELECT * FROM users WHERE nom =:user');
       $req->execute(array('user'=> $_SESSION['username'] ));
       $donnes=$req->fetch();
       $req->closeCursor ();
         $res=$bd->prepare('SELECT * FROM actions where id_user=:id ');
         $res->execute(array('id'=>$_SESSION['username']));

         ?>

<!DOCTYPE html>
    <html lang="en">
    <head>

        <img src="../images/logoprofile.png" style=" width: 200px;position: relative;">
	    <div class="services" ><h1><?php echo $donnes['nom']." ".$donnes['prenom']; ?></h1>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet"  href="../css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">

  <div class="wrapper" style=" position: absolute;
  top: 10%;
  left: 85%;
  transform: translate(-50%,-50%);">
  <div class="container" style="position: relative; padding: 20px 50px;">
      <a href="../login_page.html" style="color:red; ">  <i class="fa fa-sign-out fa-2x"></i></a>
      <h6 style="position: relative;top: -30px;left: 65%;color: red;">Deconnecter</h6>
  </div>
</div>


<style>
  
 

  #modal{
   background-color: #999999;
   width:220%;
   height: 80vh;
   position: absolute;
   top: -100px;
   left: -90PX;
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
   width:220%;
   height: 80vh;
   position: absolute;
   top: -300px;
   left: -90PX;
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
  #modal2{
   background-color: #999999;
   width:220%;
   height: 50vh;
   position: absolute;
   top: -70px;
   left: -300PX;
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
   left: -300PX;
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
   left: -300PX;
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
   left: -300PX;
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
   left: -300PX;
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
  #modal:target{
   opacity: 1;
   visibility: visible;
  }
  #modal:target .modal__content{
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
 #modal16:target{
   opacity: 1;
   visibility: visible;
  }
  #modal16:target .modal__content{
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
 </style>
</head>
<body>
  
  <div>
  
  	<div class="row">
      <div class="col-md-3 text-center">
  			
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
         <img src="../images/avatar.jpg" style=" width: 165%;
    border-radius: 155%;position: relative;top: -65px;    border: 2px white solid;">
        </div>
    <div id="modal__content">

      <a href="#" class="modal__close">&times;</a>
    

    <h3 style="color: #ffb700;text-align: center;"> <i class="fa fa-id-card-o" aria-hidden="true"></i> Informations Personnel </h3><br>
          <h6 style="position: relative;left: 10%;">NOM    :  <?php echo "  ".$_SESSION['username'].""; ?></h6>
              <h6 style="position: relative;left: 10%;">PRENOM    :  <?php echo "  ".$donnes['prenom'].""; ?></h6>
                 <h6 style="position: relative;left: 10%;">MOT DE PASSE    :  <?php echo "  ".$donnes['mdp'].""; ?><a href="#modal16" style="color: grey;position: relative;left: 25%;"> modifier</a></h6>
                  
      </div></div></div>

      
      <div  style="border-left: 2px solid white;
  height: 270px;
  position: absolute;
  left: 25%;
  margin-left: 3px;
  top: 300px;"></div>
       <div class="#modal16" id="modal16">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
    
           <form class="form-horizontal" action="#verifierpsw" method="post">
<h3 style="color: #ffb700;text-align: center;">Modifier votre mot de pass !</h3>

<div class="input-row">
   <input type="text" placeholder="Ancien mot de pass" name="psw1" style="position: relative;top: 100px;left:-40%;width: 400px;height: 15px;border: 2px solid #fff;
  padding: 15px 30px;
  border-radius: 50px;
  outline: none;
  font-size: 18px;
  background-color: transparent;">
              <br><br>
      <input type="password" placeholder="Nouveau mot de pass" name="psw2" id="psw2" style="position: relative;left:-40%;top: 100px;width: 400px;height: 15px;border: 2px solid #fff;

  padding: 15px 30px;
  border-radius: 50px;
  outline: none;
  font-size: 18px;background-color: transparent;"> 
                       
 <br><br><br> <input type="submit" value="modifier" style="position: relative;top: 100px;left: -10%;width: 200px;height: 45px; padding: 15px 30px;
  border-radius: 50px;
  outline: none;
  font-size: 18px;
  background-color: transparent;"> 
                       

</div>
</form>
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
</div>
        <div class="col-md-3 text-center">
        <div class="icon">
        <i class="fa fa-list " ></i>
        </div>
  		 <h3><a href="#modal" class="modal-open" style="color: #ffb700;">Extraire parcours</a></h3>
       <p>Vien voire ton parcour</p>

 <div class="#modal" id="modal">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-list " ></i>  Parcours</h2>
      
       <table border="4" width="100%">
        <tr>
          <th>date </th><th>heure </th><th>action </th><th>resource </th>
          </tr>
          <?php 
          while(  $donne=$res->fetch()) {?>
          <tr>
            <td><?php echo ($donne['date_action'] )  ?></td>
            <td><?php echo($donne['heure']) ?></td>
            <td><?php echo($donne['nom_action']) ?></td>
            <td><?php echo($donne['resource']) ?></td>

          </tr>
        <?php } $res->closeCursor(); ?>
      </table>

    </div>
 </div>
</div>

       	<div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-question " ></i><br></br>
  			</div>	
  				<h3><a href="#modal2" style="color: #ffb700;">Interroger parcours</a></h3>
  				<p> tu peux découvrir a quellques information ici ! </p>
  			 <div class="#modal2" id="modal2">
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
   <h2 class="modal__heading" style="color: #ffb700;"> Creat your request !</h2>
      
<div class="list-type1">
<ol>
<li><a href="#modal11">Voulez vous voire vos actions ?</a></li>
<li><a href="#modal12">temps de vos actions !</a></li>
<li><a href="#modal13">votre addresse IP</a></li>
<li><a href="#modal14">Les cours qui vous avez suivre avant !</a></li>

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


      <div >
        

        <div >
          <i ></i><br></br>
        </div>  
            
          <h3><p style="color: transparent;">Modiiiiiiifier profiiiiile</p></h3>
        
      </div>


  		 <div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-university " ></i><br></br>
  			</div>	
  				<h3><a href="http://elearning.univ-constantine2.dz/" style="color: #ffb700;">e-learning</a></h3>
  				
  			
  		</div>
       
      

  		<div class="col-md-3 text-center">
  			

  			<div class="icon">
  			<i class="fa fa-server " ></i><br></br>
  			</div>	
  				<h3><a href="#modal1" style="color: #ffb700;">Identifier session</a></h3>
  				<p> tu peux découvrir ton historique par jour ! </p>
  			

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
          $date=$donne['date_action'];
           ?>
       
      <legend>
      <h3>session<?php echo $co ; ?></h3>
      </legend>
       <table border="4" width="100%">
        <tr>
          <th>date </th><th>heure </th><th>action </th><th>resource </th>
          </tr>
          <tr>
            <td><?php echo ($donne['date_action'] )  ?></td>
            <td><?php echo($donne['heure']) ?></td>
            <td><?php echo($donne['nom_action']) ?></td>
            <td><?php echo($donne['resource']) ?></td>

          </tr>
        <?php   }else{ ?>
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
  				<h3><a href="calculer_statistique.php" style="color: #ffb700;">Calculer statistique</a></h3>
  				<p> ton avancemant avec maniere plus claire et lisible ! </p>
  			
  		</div>

       

  	</div>
  
</body>
</html>