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
    
    <script type="text/javascript">
     $(
       function()
       {

        $(".mesDemandes").click(
        function()
        {
        $(this).css('background-color','#2E9AFE');
        });
    
        
        $(".mesOffres").click(
        function()
        {
        $(this).css('background-color','#2E9AFE');
        });
    
        $(".mesOffres").click(
        function()
        {
        $(this).css('background-color','#2E9AFE');
        });
     }
     )
        </script>
</head>
<body>
 
<div>
<input type='search' name='txtRecherche' onkeyup='barreRecherche()' id='txtRecherche' placeholder='saisir votre demande '>
</div>
<center>
<h2 id="milieux">Mes Demandes</h2>
<?php 
foreach($lesDemandes as $UneDemande)
{
    echo"<div onclick='recupOffre(".$UneDemande->idDemande.",".$UneDemande->idService.")' class='mesDemandes' name='".$UneDemande->idDemande."' id='".$UneDemande->idDemande."'>";
    echo "<p>".$UneDemande->nomService."</p>";
    echo "<p>".$UneDemande->descriptionDemande."</p>";
    echo"</div>";
}
?>
</center>
<center>
    <h2 id='milieux'>mes Offres</h2>
    <?php 
foreach($lesOffres as $UneOffre)
{
      echo"<div onclick='recupDemande(".$UneOffre->idOffre.",".$UneOffre->idService.")' class='mesOffres'  name='".$UneOffre->idOffre."' id='".$UneOffre->idOffre."'>";
      echo "<p>".$UneOffre->nomService."</p>";
      echo "<p>".$UneOffre->descriptionOffre."</p>";
      echo"</div>";
}
?>
</center>

<br><br><br>

<div id='lesUsers'>
</div>
   <br>
<div id="demOffreUserSelectionne">
</div>
<center>
<input type="submit" value='créer' name='txtCreer' class='button' onclick='ajouterDeals()' id='txtCreer'>
</center>

<form methode="get" action="<?php echo base_url(); ?>index.php/Controller_login/utilisateur/retour">
<center>
<input type="submit" value='retour' name='txtRetour' class='btnCreationRetour' id='txtCreer'>
</center>
</form>

</body>
</html>