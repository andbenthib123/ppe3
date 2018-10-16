<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url();?>./JQuery/jquery-3.1.1.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.js"></script>
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css" rel="stylesheet">  
        <link href="<?php echo base_url();?>./CSS/style_accueil.css" rel="stylesheet">      
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
<body class="body">
<header class="forme">
<div class="element header" ><a href='<?php base_url()?>utilisateur' style="color: white">Home &nbsp;|</a></div>
<div class="element header" ><a href='#offre' style="color: white">Offre &nbsp;|</a></div>
<div class="element header"><a href='#demande' style="color: white">Demande &nbsp;|</a></div>
<div class="element header"><a>Deal &nbsp;|</a></div>
<div class="element header"><a>Deconnexion</a></div>
</header>
    <?php
  
    echo '<div>';
    echo '<br>';
    echo '<div class="demande">';
    echo '<h2 id="demande">MES DEMANDES &nbsp<a class="lienplus">+</a></h2>';
    echo '</div>';
    echo '<br>';
    
     foreach($lesDemandes as $laDemande)
     {
        echo '<div class="corps">';
        echo'<p><a href='.base_url()."index.php/Controller/utilisateur".$laDemande->idDemande.'>'.$laDemande->descriptionDemande.'<br>'.$laDemande->nomService.'<br>'.$laDemande->dateDemande.'</a></p><br>';

        echo '</div>';
     }
     echo '</div>';
     echo '<br>';
     echo '<br>';
     echo '<div>';
     echo '<br>';
     echo '<div class="fondDemande">';
     echo '<h2 id="offre">MES OFFRES &nbsp<a class="lienplus">+</a></h2>';
     echo '</div>';
     echo '<br>';
     foreach($lesOffres as $uneOffre)
     {
        echo '<div class="corps">';
         echo "<p>".$uneOffre->dateOffre."<br>".$uneOffre->nomService."<br>".$uneOffre->descriptionOffre."</p><br>";
         echo '</div>';
     }
     echo '</div>';     
    ?>
</body>
</html>
