<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<form method='POST' action="<?php echo base_url()?>index.php/Controller_login/inscriptions">
<input type="text" placeholder='Nom' name="txtNom"><br>
<input type='text' placeholder='Prenom' name='txtPrenom'><br>
<input type="text" placeholder="login" name='txtLogin'><br>
<input type="password" placeholder="mot de passe" name='txtMdp'><br>
<input type="submit" value='Valider' name='btnInscriptions'>
</form>
</body>
</html>