<?php 
session_start();
/*j'ai injecter de js(<script>alert("Il n'ya plus de sandwitch!")</script>) dans l'un des champs de formulaire 
avant d'ajouter htmlspecialchars=>une alerte s'affiche.
puis j'ai ajouté htmlspecialchars=>ca fonctionne*/
$nom=htmlspecialchars($_POST["Nom"]);
$prenom=htmlspecialchars($_POST["Prenom"]);
$nombre=htmlspecialchars($_POST["Nombre"]);
$adr=htmlspecialchars($_POST["Adresse"]);
$typpe=htmlspecialchars($_POST["choix"]);
$ingr=($_POST["ing"]);


?>

  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux//bootstrap.css">
    <title>resa.html</title>
</head>
<body>
<div class="alert alert-success">
        Welcome  
        </div>
        <?php
        if(isset($nom)&&isset($prenom)&&isset($nombre)&&isset($adr)&&isset($typpe)&& isset($ingr))
        {
            $_SESSION['user']="as";
           echo" VOUS ETES: ",$nom ," ", $prenom;?>
           <br>
           <?php
           echo "votre adresse: ", $adr;?>
           <br>
           <?php
          
           echo "vous avez passez ",$nombre, " sandwitchs de type " , $typpe," avec les ingredients suivants: " ;
         echo '<br>';
            
                for ($i=0; $i<count($ingr); $i++){
                    $unarticle= $ingr[$i];
                    echo $unarticle. '<br>';
                   
                    }
            ?>
           <br>
           <?php
            if (floatval($nombre)<10){
           echo "Le prix d’un sandwitch est de 4dt donc le prix total est: ", floatval($nombre)*4 ,"dt"; }
           else 
           {echo "Le prix d’un sandwitch est 4dt. vous avez commandez plus que 10 ! cher client : vous avez une remise de 10% ,donc le prix total est: ", floatval($nombre)*4 *0.9,"dt";
           }
           ?>
           <br>
           <?php 
        }
        else {
            $_SESSION['errorMessage']="veuillez verifier vos coordonnées";
            header('location:resa.php');
        }
         ?>
   <?php
  $uploaddir = './file/';
  $file  = $uploaddir . basename($_FILES['File']['name']);
  
  if (move_uploaded_file($_FILES['File']['tmp_name'], $file)) {
    echo "votre CIN est bien envoyée ";
  } else {
      echo "Erreur";
  }
    
?>

    </body>
</html>

