<?php
$this->load->library('session');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modif demande</title>
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
<form method="POST" action="<?php echo base_url(); ?>index.php/C_modifDemande/enregisterModifDemande">
<div style="margin-right: 100px; float: right; margin-left: height: 500px; width: 450px;">
<p>NUMERO DE LA DEMANDE</p>
 <div>
 <?php 
 foreach($modifierMaDemande as $numDemande)
 {
     echo '<h2 style="margin-left: 5px">'.$numDemande->idDemande.'</h2>';
 }
 ?>
 </div>
 <p>DESCRIPTION DE LA DEMANDE</p>
 <div>
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
 <div>
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
<div style=>
<?php
foreach($modifierMaDemande as $ServiceDemande)
{
    echo '<h2 style="margin-left: 5px">'.$ServiceDemande->nomService.'</h2>';  
}
?>
</div>
<input class='button'  type="submit" name="btnValider" value="valider"><br>
</form>

<form methode="POST" action="<?php echo base_url(); ?>index.php/Controller_login/utilisateur/retour">
<input class='button'  type="submit" value="retour">
</form>


</body>
</html>