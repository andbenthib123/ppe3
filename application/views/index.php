<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>


<?php  echo form_open ('Controller_login' ); echo validation_errors ();  

?>    
<form method='GET' action="index.php">

        <label>nom d'utlisateur</label><br>
        <input type="text" name="txtUser" id="txtUser"><br>
        <label>mot de passe</label><br>
        <input type="password" name="txtMdp" id="txtMdp"><br>
        <input type="submit" name="btnValider" id="btnValider" value="valider">
</form>
</body>
</html>