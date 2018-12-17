<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< HEAD
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesfonction.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>Jquery/jquery-3.2.1.js"></script>
        <script src="./Bootstrap/js/bootstrap.min.js"></script>
        <script src="./Bootstrap/js/bootstrap.js"></script>
        <link href="./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <script type="text/javascript">
        $(
            function()
            {
              $("h1").css('color','white');
              $("a").css('color','white');
              $("p").css('color','white');
             
              $('.element').mouseenter(
                  function(){
                      $(this).css('background','#B11F01');
                  }
              )
              $('.element').mouseout(
                  function(){
                      $(this).css('background','#E82E07');
                  }
              )
              $('.corps').mouseenter(
                  function(){
                      $(this).css('background','#611404')
                  }
              )
              $('.corps').mouseout(
                  function(){
                      $(this).css('background','#000000')
                  }
              )
            }
        );
       
        </script>
</head>
<body style="background-color: #000000;">
<header style="background-color: #E82E07; text-align: right;">
<div class="element" style="display: inline-block;  height: 45px;"><a href='index.php' style="color: white">Home &nbsp;|</a></div>
<div class="element" style="display: inline-block;  height: 45px;"><a href='#offre' style="color: white">Offre &nbsp;|</a></div>
<div class="element" style="display: inline-block;  height: 45px;"><a href='#demande' style="color: white">Demande &nbsp;|</a></div>
<div class="element" style="display: inline-block;  height: 45px;"><a style="color: white">Deal &nbsp;|</a></div>
<div class="element" style="display: inline-block;  height: 45px;"><a style="color: white">Deconnexion</a></div>
</header>
    <?php
    echo '<div>';
    echo '<br>';
    echo '<div style="width: 310px; border-bottom: 2px solid red;">';
    echo '<h1 id="demande">MES DEMANDES</h1>';
    echo '</div>';
    echo '<br>';
     foreach($lesDemandes as $laDemande)
     {
        echo '<div class="corps" style="margin: 10px; display: inline-block; width: 340px; height: 150px; border-style: solid; border-color: white;">';
        echo "<p><a href='index.php/Ctrl_ModifDemande/modifDemande/".$laDemande->idDemande."'>".$laDemande->descriptionDemande."<br>".$laDemande->nomService."<br>".$laDemande->dateDemande."</a></p><br>";
        echo '</div>';
     
     }
     echo '</div>';
     echo '<br>';
     echo '<br>';
     echo '<div>';
     echo '<br>';
     echo '<div style="width: 270px; border-bottom: 2px solid red;">';
     echo '<h1 id="offre">MES OFFRES</h1>';
     echo '</div>';
     echo '<br>';
     foreach($lesOffres as $uneOffre)
     {
        echo '<div class="corps" style=" margin: 10px; display: inline-block; width: 340px; height: 150px;  border-style:solid; border-color: white; margin-left: 10px;">';
         echo "<p>".$uneOffre->dateOffre."<br>".$uneOffre->nomService."<br>".$uneOffre->descriptionOffre."</p><br>";
         echo '</div>';
     }
     echo '</div>';     
     
    ?>
=======
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

<form method='POST' action="<?php echo base_url()?>index.php/Controller_login/login">

    <div class="form-group">
    <h2>connectez-vous!</h2><br>
    <?php
    if(isset($login))
    {
      echo  "<p id='txtmessageAlert' class='alert alert-danger '> veuillez mettre un login </p>";    
    }
    else
    {
        if(isset($motdepasse))
        {
      echo  "<p id='txtmessageAlert' class='alert alert-danger '> veuillez mettre un mot de passe</p>";
        }
        else
        {
            if(isset($compte))
            {
          echo  "<p id='txtmessageAlert' class='alert alert-danger '>mot de passe ou identifiant incorrect</p>";
            }
        }
    }
?>
    <input type="text" placeholder="login"  class=" input form-control" name="txtUser" id="txtUser"><br>
    <input type="password" placeholder="mot de passe" class="input form-control" name="txtMdp" id="txtMdp"><br>
  
    <input type="submit" class="btn btn-primary btn-block btn-large" name="btnValider" id="btnValider" value="valider"><br>
    <a class="inscrire" style="text-decoration:none;" href="<?php echo base_url()?>index.php/Controller_login/inscriptions">inscris toi</a>

    <div>
</form>

<div>

>>>>>>> c03bdc8f95af9d9c9e0f18e6d1a55f26068124bc
</body>
</html>