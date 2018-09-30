<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="./Bootstrap/js/bootstrap.min.js"></script>
        <script src="./Bootstrap/js/bootstrap.js"></script>
        <link href="./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="Jquery/jquery-3.2.1.js"></script>
        <script type="text/javascript">
        $(
            function()
            {
              $("h1").css('color','white');
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
            }
        
        
        );
       
        </script>
        
        

</head>
<body style="background-color: black;">
<header style="background-color: #E82E07; text-align: right;">
<div class="element" style="display: inline-block; height: 50px;"><a href='index.php' style="color: white">Home &nbsp;|</a></div>
<div class="element" style="display: inline-block; height: 50px;"><a href='#offre' style="color: white">Offre &nbsp;|</a></div>
<div class="element" style="display: inline-block; height: 50px;"><a href='#demande' style="color: white">Demande &nbsp;|</a></div>
<div class="element" style="display: inline-block; height: 50px;"><a style="color: white">Deal &nbsp;|</a></div>
<div class="element" style="display: inline-block; height: 50px;"><a style="color: white">Deconnexion</a></div>
</header>
    <?php
    echo '<div>';
    echo '<br>';
    echo '<h1 id="demande">MES DEMANDES</h1>';
     foreach($lesDemandes as $laDemande)
     {
        echo '<div style="display: inline-block; width: 450px; height: 200; border:1px; solid;">';
        echo "<p>".$laDemande->dateDemande."<br>".$laDemande->nomService."<br>".$laDemande->descriptionDemande."</p>";
        echo '</div>';
     }
     echo '</div>';
     echo '<br>';
     echo '<br>';
     echo '<div>';
     echo '<br>';
     echo '<h1 id="offre">MES OFFRES</h1>';
     foreach($lesOffres as $uneOffre)
     {
         echo '<div style="display: inline-block; width: 450px; height: 200; border:snow; 1px; solid;">';
         echo "<p>".$uneOffre->dateOffre."<br>".$uneOffre->nomService."<br>".$uneOffre->descriptionOffre."</p>";
         echo '</div>';
     }
     echo '</div>';     
     
    ?>
  

</body>
</html>