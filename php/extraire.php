

<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">

  
  <style>
    body
{
  background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(../images/img7.jpg);
  background-size: cover;
  background-position: center;
  color: #FFF !important;
  height: 100vh; 
}
  #modal{
   background-color: #999999;
   width:50%;
   height: 80vh;
   position:relative;
   left: 12%;
   top:-100px;
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
   #modal:target{
   opacity: 1;
   visibility: visible;
  }
  #modal:target .modal__content{
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
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">Selectionnez les apprenants qui vous voulez voire leur parcours</h2>
   <br /><br />
   <form method="post" id="framework_form" >
    <div class="form-group">
     <label>Liste Des Apprenats</label>
      <select id="framework" name="framework[]" multiple class="form-control" >
      <option value="Cereghetti">Cereghetti</option>
      <option value="Ortaer">Ortaer</option>
      <option value="Schneider">Schneider</option>
      <option value="Piguet">Piguet</option>
      <option value="bayoudh">bayoudh</option>
      <option value="Travnjak">Travnjak</option>
      <option value="Salamin">Salamin</option>
      <option value="Peraya">Peraya</option>

      <option value="Wenger">Wenger</option>
      <option value="Doussa">Doussa</option>
      <option value="Costa">Costa</option>
      <option value="Rocca">Rocca</option>
      <option value="yau">yau</option>
      <option value="brahim">brahim</option>
      <option value="Liu">Liu</option>
     </select>
    </div>
    <div class="form-group">
     <h3><a href="#modal">afficher</a>
    </div>


   </form>

   <br />
  </div>
 <div class="#modal" id="modal" >
    <div id="modal__content">
      <a href="#" class="modal__close">&times;</a>
      <h2 class="modal__heading" style="color: #ffb700;"><i class="fa fa-list " ></i>  Parcours</h2>
      
          <?php 
 require_once("connecter.php");
 
if(isset($_POST["framework"]))
{
 foreach($_POST["framework"] as $row)
{

 $res = $bd->prepare('SELECT * from actions where id_user =?');
 $res -> execute([$row]);
  // $res =$bd->query( 'SELECT * from actions where id_user = "'.$row.'" ');

  ?>
 <table border="4" width="100%" style="color: white;">
        <tr>
          <th>date </th>
          <th>heure </th>
          <th>action </th>
          <th>resource </th>
           </tr> 
          <?php
 while($donne=$res->fetch()){
  
  
   ?>
    
              <tr>
            <td><?php echo ($donne['date_action']) ?></td>
            <td><?php echo($donne['heure']) ?></td>
            <td><?php echo($donne['nom_action']) ?></td>
            <td><?php echo($donne['resource']) ?></td>

          </tr>

   
        <?php  } ?> </table> <?php } }  ?>
      
      

    </div>

 </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
});
</script>
