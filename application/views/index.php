<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url();?>./JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.js"></script>
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./CSS/style.css" rel="stylesheet">
      
    <?php  //echo form_open ('Controller_login' ); echo validation_errors ();?>    
</head>
<body>
<div class="login">
<form  id="Login" method='post' action="<?php echo base_url()?>index.php/Controller_login/login">
    <div class="form-group">
    <h2>connectez-vous!</h2><br>
    <input type="text" placeholder="login"  class=" input form-control" name="txtUser" id="txtUser"><br>
    <input type="password" placeholder="mot de passe" class="input form-control" name="txtMdp" id="txtMdp"><br>
    <input type="submit" class="btn btn-primary btn-block btn-large"  name="btnValider" id="btnValider" value="valider"><br>
    <a class="inscrire" style="text-decoration:none;" href="<?php echo base_url()?>index.php/Controller_login/inscriptions">inscris toi</a>

    <div>
</form>

<div>

</body>
</html>