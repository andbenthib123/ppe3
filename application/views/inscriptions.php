<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  <script src="<?php echo base_url();?>./JQuery/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.js"></script>
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./CSS/style.css" rel="stylesheet">
    
</head>
<body>
<div class="login">
<form method='POST' action="<?php echo base_url()?>index.php/Controller_login/inscriptions">
<div class="form-group">
<h2>Inscris toi!</h2><br>
<input type="text" class=" input form-control" placeholder='Nom' name="txtNom">
<input type='text' class=" input form-control" placeholder='Prenom' name='txtPrenom'>
<input type="text" class=" input form-control" placeholder="login" name='txtLogin'>
<input type="password" class=" input form-control" placeholder="mot de passe" name='txtMdp'><br>
<input type="submit" class="btn btn-primary btn-block btn-large" value='Valider' name='btnInscriptions'>
<input type="submit" value="retour" name="btnRetour" class="btn btn-second btn-block btn-large" >
</div>
</form>
<div>

</body>
</html>