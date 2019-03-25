<?php
$this->load->library('session');
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
           
             
              $('.element').mouseenter(
                  function(){
                      $(this).css('background','#5C6BC0');
                  }
              )
              $('.element').mouseout(
                  function(){
                      $(this).css('background','#B3E5FC');
                  }
              )
              $('.corps').mouseenter(
                  function(){
                      $(this).css('background','#BBDEFB')
                  }
              )
              $('.corps').mouseout(
                  function(){
                      $(this).css('background','#B3E5FC')
                  }
              )
            }
        );
        </script>
</head>

<body class="body">
<header class=" container-fluid header">
<div class="container ">
<p class="p"><?php  echo$_SESSION['nomUser'];?></p>
<img class="p photoheader"src="<?php echo $_SESSION['photoUser']; ?>"  >
<nav class='menu'>
<a href="<?php echo base_url()?>index.php/Controller_login/deconnexion/">Deconnexion</a>
<a href="#deal">Deal &nbsp;|</a>
<a href='#demande' >Demande &nbsp;|</a>
<a href='#offre' >Offre &nbsp;|</a>
<a href='<?php base_url();?>utilisateur' >Home &nbsp;|</a>
    </nav>
</div>
</header>
    <?php
  $i=0;
    echo '<div>';
    echo '<br>';
    echo '<div class="demande">';
    echo '<h3 id="demande">MES DEMANDES &nbsp<a class="lienplus" href="'.base_url().'index.php/C_creationDemande/">+</a></h3>';
    echo '</div>';
    echo '<br>';
    
     foreach($lesDemandes as $laDemande)
     {
        echo '<div class="corps">';
        
        echo'<p><a href='.base_url()."index.php/C_modifDemande/modifDemande/".$laDemande->idDemande.'>'.$laDemande->descriptionDemande.'<br>'.$laDemande->nomService.'<br>'.$laDemande->dateDemande.'</a></p><br>';

        echo '</div>';
     }
     echo '</div>';
     echo '<br>';
     echo '<br>';
     echo '<div>';
     echo '<br>';
     echo '<div class="fondDemande">';
     echo '<h3 id="offre">MES OFFRES &nbsp<a class="lienplus" href="'.base_url().'index.php/C_creationOffre/">+</a></h3>';
     echo '</div>';
     echo '<br>';
     foreach($lesOffres as $uneOffre)
     {
        echo '<div class="corps">';
        echo'<p><a href='.base_url()."index.php/C_modifOffre/modifOffre/".$uneOffre->idOffre.'>'.$uneOffre->descriptionOffre.'<br>'.$uneOffre->nomService.'<br>'.$uneOffre->dateOffre.'</a></p><br>';
         echo '</div>';
     }
     echo '</div>';     
     echo '<br>';
     echo '<br>';
     echo '<div>';
     echo '<br>';
     echo '<div class="fondDemande">';
     echo '<h3 id="deal">mes Deals &nbsp<a class="lienplus" href="'.base_url().'index.php/C_creationsDeals/">+</a></h3>';
     echo '</div>';
     echo '<br>';
     foreach($lesDeals as $unDeal)
     {
         
if($unDeal->idEtat ==1)
{
    echo '<div id="divDealR" class="corpsDeal centre">';
    echo"<img class='photoCorps' src='".$unDeal->photoUser."'>";
    echo"<p>".$unDeal->nomUser."</p>";
    echo"<p>".$unDeal->nomService."</p>";
    echo"<p>VS</p>"; 
    echo"<p>".$serviceUser2[$i]->service2."</p>"; 
    $i++;
    echo"<p>".$unDeal->dateDeal."</p>";
    echo"<p>".$unDeal->noteUser1."-".$unDeal->noteUser2."</p>";
    echo'<h4><a href='.base_url()."index.php/C_creationsDeals/noteDeals/".$unDeal->idDeal.">afficher</a></h4>";
     echo '</div>';


}
else
{
    if($unDeal->idEtat ==2)
        {
    echo '<div id="divDealV" class="corpsDeal centre">';
    echo"<img class='photoCorps' src='".$unDeal->photoUser."'>";
    echo"<p>".$unDeal->nomUser."</p>";
    echo"<p>".$unDeal->nomService."</p>";
    echo"<p>VS</p>";
    echo"<p>".$serviceUser2[$i]->service2."</p>"; 
    $i++;
    echo"<p>".$unDeal->dateDeal."</p>";
    echo"<p>".$unDeal->noteUser1."-".$unDeal->noteUser2."</p>";

    echo'<h4><a href='.base_url()."index.php/C_creationsDeals/noteDeals/".$unDeal->idDeal.">afficher</a></h4>";
     echo '</div>';
        }
    }
}
     
     
    ?> 
</div>
</body>
</html>
