<?php
$this->load->library('session');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php echo base_url();?>./JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
    <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.js"></script>
    <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css" rel="stylesheet">  
    <link href="<?php echo base_url();?>./CSS/style_demandeetoffre.css" rel="stylesheet">  
    
</head>
<body>
 
<div>
<input type="search" autocomplete="on" name="txtRecherche" onclick="barrerecherche(txtRecherche)" id="txtRecherche" placeholder="saisir le texte recherché dans une offre">
</div>

<div class="gauche">
<div class="partieGauche">
   
<h2>Mes Demandes</h2>

<?php 

foreach($lesDemandes as $UneDemande)
{
    echo"<option>";
    echo $UneDemande->descriptionDemande;
   
        echo "</option>";
}

?>
    <h2>mes Offres</h2>
    <?php 
foreach($lesOffres as $UneOffre)
{
    echo"<option>";
    echo $UneOffre->descriptionOffre;
   
        echo "</option>";
}

?>
</div>
</div> 
  
  
  <div id='afficherUsers'>
  
  </div>
   

      

</body>
</html>