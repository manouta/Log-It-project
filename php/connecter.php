
<?php

	try {

	$bd=new PDO('mysql:host=localhost;dbname=logdatabase;charset=utf8','root','');
    
    } catch (exception $ex) {
        die('Error : ' . $ex->getMessage());
    }
?>