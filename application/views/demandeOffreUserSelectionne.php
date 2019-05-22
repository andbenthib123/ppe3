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

        $(".sesDemandes").click(
        function()
        {
        $(this).css('background-color','#2E9AFE');
        });
    
        
        $(".sesOffres").click(
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

<h3>ses offres</h3>
<?php
  
foreach($offreSelectionne as $uneOffre)
{
  echo"<div class='sesOffres' onclick='selectOffreDemande(".$uneOffre->idOffre.",".$uneOffre->idService.")' name='".$uneOffre->idOffre."' class='mesOffres'>";
  echo"<p>".$uneOffre->nomService."</p>";
  echo"<p >".$uneOffre->descriptionOffre."</p>";
  echo"</div>";
  

  
}
?>

<h3>ses demandes  </h3>
<?php
foreach($DemandeSelectionne as $uneDemande)
{
 
  echo"<div class='sesDemandes' onclick='selectAll(".$uneDemande->idDemande.",".$uneDemande->idService.")'  name='".$uneDemande->idDemande."' class='mesDemandes'>";
  echo"<p>".$uneDemande->nomService."</p>";
  echo"<p>".$uneDemande->descriptionDemande."</p>";
  echo"</div>";

}

?>

</body>
</html>