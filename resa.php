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
    <title>resa.html</title>
</head>
<body>
<?php if(isset($_SESSION['errorMessage'])){
        ?>
        <div class="alert alert-danger">
            <?=$_SESSION['errorMessage'] ?> 
        </div>
        <?php 
        unset($_SESSION['errorMessage']);
    }
    ?> 
<div class="container">
<form action="recap.php" method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text"  name="Nom" class="form-control" id="inputNom" placeholder="Nom"> 
      <br>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" name="Prenom" class="form-control" id="inputPrenom" placeholder="Prenom">
      <br>
    </div>
  </div>
    <div class="form-group row">
    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre de sandwitchs</label>
    <div class="col-sm-10">
      <input type="number"  name="Nombre" class="form-control" id="inputNombre" placeholder="Nombre de sandwitchs est supérieure a 1 svp">
      <br>
    </div>
    </div>
    <div class="form-group row">
    <label for="inputAdress" class="col-sm-2 col-form-label">Adresse</label>
    <div class="col-sm-10">
      <TEXTAREA name="Adresse" class="form-control" id="inputAdress" placeholder="Adresse" ROWS=5 COLS=40></TEXTAREA>
      <br>
    </div>
  </div>

  <div class="form-group row">
  <label for="inputType" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-10">
      <select  name="choix" class="form-control">
        
        <option >Viande</option>
        <option >Poulet</option>
        <option >Escalope</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">Ingrédients :</div>
    <div class="col-sm-10">
      <div class="form-check">
      <INPUT   class="form-check-input"  id="gridCheck1" TYPE ="checkbox" name ="ing[]" VALUE="harissa"> harissa 
      </div>
      <div class="form-check">
      <INPUT   class="form-check-input"  id="gridCheck2" TYPE ="checkbox" name ="ing[]" VALUE="Mayo"> Mayo
      </div>
      <div class="form-check">
      <INPUT   class="form-check-input"  id="gridCheck3" TYPE ="checkbox" name ="ing[]" VALUE="Salade"> Salade
      </div>
    </div>
  </div>

<div class="form-group row">
    <label for="inputFile" class="col-sm-2 col-form-label">CIN</label>
    <div class="col-sm-10">
      <input type="file"  name="File" class="form-control" id="inputFile" placeholder="File"> 
      
    </div>
  </div>
  <br>
<div class="form-group row">
  <label for="inputsubmit" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" >Sign in</button>
    </div>
  </div>
  </div>
  
</form>
</div>

</body>
</html>