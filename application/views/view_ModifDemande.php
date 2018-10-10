<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modif demande</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div style="margin-left: 100px; float: left; height: 500px; width: 450px; text-align:center;">
    <?php 
    foreach($modifierMaDemande as $monImage)
    {
        ?>
        <img style="height: 500px; width: 450px;"src="<?php echo $monImage->photoService; ?>">
        <?php
    }
    ?>
</div>
<form method="POST" action="<?php echo base_url(); ?>index.php/Home/index">
<div style="margin-right: 100px; float: right; margin-left: height: 500px; width: 450px;">
<p>NUMERO DE L'OFFRE</p>
 <div style="border-bottom: 2px solid black; background-color: grey;">
 <?php 
 foreach($modifierMaDemande as $numDemande)
 {
     echo '<h2 style="margin-left: 5px">'.$numDemande->idDemande.'</h2>';
 }
 ?>
 </div>
 <p>DESCRIPTION DE LA DEMANDE</p>
 <div style="border-bottom: 2px solid black;">
 <?php
 foreach($modifierMaDemande as $descDemande)
 {
     ?>
     <input type="text" name="descri" style="width: 448px;" value="<?php echo $descDemande->descriptionDemande; ?>">
     <?php
 }
 ?>
 </div>
 <p>DATE DE LA DEMANDE</p> 
 <div style="border-bottom: 2px solid black;">
 <?php 
 foreach($modifierMaDemande as $MaDateDemande)
 {
     ?>
     <input type="text" name="dateDem" style="width: 448px;" value="<?php echo $MaDateDemande->dateDemande; ?>">
     <?php
 }
 ?>
</div>
<p>NOM DU SERVICE</p>
<div style="border-bottom: 2px solid black; background-color: grey;">
<?php
foreach($modifierMaDemande as $ServiceDemande)
{
    echo '<h2 style="margin-left: 5px">'.$ServiceDemande->nomService.'</h2>';  
}
?>
</div>
</form>
<input type="submit" name="btnValider" value="valider"><br>
<form action="<?php echo base_url(); ?>index.php/Home/index">
<input type="submit" value="Home">
</form>


</body>
</html>