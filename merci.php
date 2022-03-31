<?php
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux//bootstrap.css">
    <meta http-equiv="refresh" content="120;URL=http://localhost:8000/expirer.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sondage</title>
</head>
<body>
<div class="alert alert-success">
        Merci pour votre vote! <br>
        votre vote:
        <?php 
              echo $_COOKIE['vote'] ;
         ?>
      
</div>
</body>
</html>


        
