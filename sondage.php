<?php
session_start();
if (isset($_SESSION['new'])){
    setcookie ('vote', $_POST['vote'], time() + 365*24*3600);  
    header('location:merci.php') ;
}
else{
    $_SESSION['new']=1 ;
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="120;URL=http://localhost:8000/expirer.php">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux//bootstrap.css">
    <title>Sondage</title>
</head>
<body>
<div class="alert alert-success">
        Bienvenue ! svp il faut évaluer le cours PHP:
        </div>
        <div class="container">
<form  method="POST" >
<div class="form-check">
  <input class="form-check-input" type="radio" name="vote"  value="Bon" checked>
  <label class="form-check-label" for="exampleRadios1">
    Bon
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="vote" value="Moyen">
  <label class="form-check-label" for="exampleRadios2">
   Moyen
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="vote"  value="Mauvais" >
  <label class="form-check-label" for="exampleRadios3">
    Mauvais
  </label>
</div>
<div class="form-group row">
  <label for="inputsubmit" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" >confirm</button>
    </div>
  </div>
  
	
</form>
</div>
<?php
}
?>