<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<style type="text/css">
		   input { 	width: 390px;
  border: 3px solid #fff;
  background: transparent;
  padding: 15px 30px;
  border-radius: 50px;
  outline: none;
  font-size: 18px;
  color: #fff;
   	   	

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
       right: 32%;
       background-color: transparent;
   	   	 }

h1
{
	font-family: sans-serif;
	letter-spacing: 1px;
    
}
h1:after
{
	content: '';
	background: white;
	display: block;
	width: 300px;
	height: 0px;
	margin: 0px auto;
	

}
	</style>


</head>

<body>
	 <div class="container">
  	<div class="services">
  		<br><br><br>
  		<h1>Importer fichier log !</h1>
  	
<br><br>
            
  	       <form class="form-horizontal" action="lirefichier.php" method="post"
                          name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">

<div class="input-row">

 <input type="file" name="file" id="file" accept=".csv" placeholder="aucune selection"> 
 <br><br><button type="submit" id="submit" name="import"
> <i class="fa fa-download " ></i></button>


</form>
</div>

</body>
</html>



