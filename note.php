<?php
session_start();
if (isset($_SESSION['usr'])){
    $_SESSION['usr']++;
   
  
}
else{
    $_SESSION['usr']=1;
}


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

<div class="container">
<body>
<form action="liste.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Note</label>
    <input 
    name="note"
    type="text" 
    class="form-control" 
    id="note" 
    STYLE="color: black;  background-color: #72A4D2;"
    placeholder="Add note" required>
    <small id="NoteHelp" class="form-text text-muted">This is a new note.</small>
  </div>
  <button
   type="submit" 
   class="btn btn-primary">ADD</button>
</form>
    </div>

</body>
</html>