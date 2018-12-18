<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
    <script src="<?php echo base_url();?>Bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>Bootstrap/js/bootstrap.js"></script>
    <link href="<?php echo base_url();?>Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">  
    <link href="<?php echo base_url();?>CSS/deal.css" rel="stylesheet">  
    
</head>
<body>
 
<div>
<input type='search' name='txtRecherche' onkeyup='barreRecherche()' id='txtRecherche' placeholder='saisir le texte recherché dans une offre'>
</div>
<div>
<h2>Mes Demandes</h2>
<?php 
foreach($lesDemandes as $UneDemande)
{
    echo"<div onclick='recupOffre(".$UneDemande->idDemande.",".$UneDemande->idService.")' class='divDemande' name='".$UneDemande->idDemande."' id='".$UneDemande->idDemande."'>";
    echo "<p>".$UneDemande->nomService."</p>";
    echo "<p>".$UneDemande->descriptionDemande."</p>";
    echo"</div>";
}
?>
    <h2>mes Offres</h2>
    <?php 
foreach($lesOffres as $UneOffre)
{
      echo"<div onclick='recupDemande(".$UneOffre->idOffre.",".$UneOffre->idService.")' class='divDemande'  name='".$UneOffre->idOffre."' id='".$UneOffre->idOffre."'>";
      echo "<p>".$UneOffre->nomService."</p>";
      echo "<p>".$UneOffre->descriptionOffre."</p>";
      echo"</div>";
}

?>
<br><br><br>
</div> 
<div id='lesUsers'>
</div>
   <br>
<div id="demOffreUserSelectionne">
</div>

<input type="submit" value='creer' name='txtCreer' onclick='ajouterDeals()' id='txtCreer'>

</body>
</html>