<?php
 require_once("connecter.php");
 session_start();
       $req=$bd->prepare('SELECT * FROM users WHERE nom =:nom');
       $req->execute(array('nom'=> $_SESSION['username']));
       $donnes=$req->fetch();
       $req->closeCursor ();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
   <img src="../images/logoprofile.png" style=" width: 200px;position: relative;left: 7%;">
    <link href="../css/style.css" rel="stylesheet" media="all">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" media="all">
</head>
<body>
  <div class="container">
  	<div class="services">
  		<h1><?php echo $donnes['nom']." ".$donnes['prenom']; ?></h1>
  	</div>

<br></br><br></br>

  	<div class="row">

<br></br><br></br>
<br></br><br></br>
<br></br><br></br>
<br></br><br></br>
<br></br><br></br>

  		<div>


  			<div>

  			</div>
  				<h3 style="color: transparent;">hhhhhhhhhhhhhhhhh</h3>
  		</div>


         <div class="col-md-3 text-center">

          <div  style="font-size: 40px;margin: 8px auto;padding:4px;height: 70px;width: 70px;border-radius:60%;">
  <img src="avatar.jpg" style=" width: 115%;
    border-radius: 125%;">
  </div>
  				<h3><a href="#" style="color: #ffb700;">Profile personnel</a></h3>


  		</div>

      <div class="t" style="border-left: 2px solid white;
	height: 170px;
	position: absolute;
	left: 50%;
	margin-left: 3px;
	top: 350px;"></div>



  		<div class="col-md-3 text-center">


  			<div>
  			<i class="fa fa-refresh fa-4x" ></i><br></br>
  		</div>
          <h3><a href="extraire.php" style="color: #ffb700;">Maitre a jour </a></h3>
          <p> tu dois  importer un fichier log pour suivre les parcours des apprenants. </p>

      </div>




  	</div>
  </div>
</body>
</html>