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
    
</head>
<body>

<h3>ses offres</h3>
<?php
  echo"<div ' class='col-md-4 freetdemande'>";
foreach($offreSelectionne as $uneOffre)
{
  echo"<div onclick='selectOffreDemande(".$uneOffre->idOffre.",".$uneOffre->idService.")' name='".$uneOffre->idOffre."' id='divOffre'>";
  echo"<p>".$uneOffre->nomService."</p>";
  echo"<p >".$uneOffre->descriptionOffre."</p>";
  echo"</div>";
}
?>
 
<h3>ses demandes  </h3>
<?php
foreach($DemandeSelectionne as $uneDemande)
{
  echo"<div  onclick='selectAll(".$uneDemande->idDemande.",".$uneDemande->idService.")'  name='".$uneDemande->idDemande."' id='divDemande'>";
  echo"<p>".$uneDemande->nomService."</p>";
  echo"<p>".$uneDemande->descriptionDemande."</p>";
  echo"</div>";
  echo"</div>";
}
?>
</body>
</html>