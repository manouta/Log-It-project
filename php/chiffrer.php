		<?php
 require_once("connecter.php");
 $msg=$_POST['m1'];
 $req=$bd->query('SELECT * FROM tab');
 $res=$req->fetch();
 $car=explode(';', $msg);
 
echo $car[0];
 

?>