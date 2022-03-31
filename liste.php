<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux//bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="alert alert-success">
        Bienvenue! c'est la liste des notes:
        <br>
        </div>
<?php 
if(isset($_POST['note'])){
    $nb=$_SESSION['usr'] ;
    $indice="note".$_SESSION['usr'] ;
     $_SESSION[$indice]= $_POST['note'] ;
   for ($i=1;$i<$nb+1;$i++){
       $ind="note".$i ;
     $note= $_SESSION[$ind] ;
     ?>
    
    
        <?php
     echo "$ind : <br>"
     ?>
        <div class="card" style="width: 18rem; color: black;  background-color:brown;">
  <div class="card-body">
    <h5 class="card-title">Nouvelle Note:</h5>
    <p class="card-text"><?php 
         echo "$note" 
        ?></p>
  </div>
</div>  
<?php

   }
  } 
  
?>
    
    
</body>
</html>
  
