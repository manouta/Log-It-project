
<?php
 require_once("connecter.php");
 session_start();
       $req=$bd->prepare('SELECT * FROM all_users WHERE e_mail =:email');
       $req->execute(array('email'=> $_SESSION['email']));
       $donnes=$req->fetch();
       $req->closeCursor ();
       
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="services">
      <h1>inscription valide</h1>
    </div>
    <div class="row">


         <div >
        <br>
       
        <div >
       <br></br>
        </div>  
          <h3><p style="color: transparent;">Modiiiiiiifier profiiiiile</p></h3>
          
        
      </div>


      
      <div style="border-left: 2px solid white;
                  height: 180px;
                  position: absolute;
                  left: 48%;
                  margin-left: 3px;
                  top: 270px;">
                    
      </div>



    

         <div class="col-md-3 text-center">
        <br></br>
       
        <div >
       <i class="fa fa-sign-in fa-3x" ></i><br></br>
        </div>  
          <h3><a href="login_page.html" style="color: #ffb700;">Sign In</a></h3>
          
        
      </div>

       
      <div class="col-md-3 text-center">
        

        <div >

        </div>  
            <h3 style="color: #ffb700;text-align: left;"> <i class="fa fa-id-card-o" aria-hidden="true"></i> BIO GRAPHIE </h6>
          <h6>NOM    :  <?php echo " ".$_POST['nom'] ?></h6>
            <h6>PRENOM    :  <?php echo " ".$_POST['prenom'] ?></h6>
             <h6>DATE DE NAISSANCE   :  <?php echo " ".$_POST['dns'] ?></h6>
              <h6>EMAIL   :  <?php echo " ".$_POST['email'] ?></h6>
               <h6>PASSWORD   : <?php echo " ".$_POST['psw'] ?></h6>
      </div>
        

       
    

    </div>
  </div>
</body>
</html>