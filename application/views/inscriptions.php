<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script src="<?php echo base_url();?>./JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./CSS/style.css" rel="stylesheet">
    
</head>
<body>
<div class="login">
<form method='POST' action="<?php echo base_url()?>index.php/Controller_login/inscriptions">
<div class="form-group">
<h2>Inscris toi!</h2><br>

 <?php
    if(isset($nom))
    {
      echo  "<p id='txtmessageAlert' class='alert alert-danger '> veuillez mettre un nom </p>";    
    }
    else
    {
        if(isset($prenom))
        {
      echo  "<p id='txtmessageAlert' class='alert alert-danger '>veuillez mettre un prenom</p>";
        }
        else
        {
            if(isset($user))
            {
          echo  "<p id='txtmessageAlert' class='alert alert-danger '>veuillez mettre un identifiant </p>";
            }
            else
            {
                if(isset($mdp))
            {
          echo  "<p id='txtmessageAlert' class='alert alert-danger '> veuillez mettre un  mot de passe </p>";
            }
            }
        }
    }
?>
<p id='txtmessageAlertInscription' class='alert alert-danger p'>remplir tout les champs</p>
<input type="text"  class=" input form-control" placeholder='Nom' id="txtNom" name="txtNom">
<input type='text' class=" input form-control" placeholder='Prenom' id="txtPrenom" name='txtPrenom'>
<input type="text" class=" input form-control" placeholder="login" id="txtLogin" name='txtLogin'>
<input type="password"  class=" input form-control" placeholder="mot de passe" id="txtMdp" name='txtMdp'><br>
<input type="submit" class="btn btn-primary btn-block btn-large"  value='Valider' name='btnInscriptions'>
<input type="submit" value="retour" name="btnRetour" class="retour" >
</div>
</form>
<div>

</body>
</html>