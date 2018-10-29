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
    foreach($modifierMonOffre as $monImage)
    {
        ?>
        <img style="height: 500px; width: 450px;"src="<?php echo $monImage->photoService; ?>">
        <?php
    }
    ?>
</div>
<form method="POST" action="<?php echo base_url(); ?>index.php/C_modifDemande/enregisterModifDemande">
<div style="margin-right: 100px; float: right; margin-left: height: 500px; width: 450px;">
<p>NUMERO DE L'OFFRE</p>
 <div>
 <?php 
 foreach($modifierMonOffre as $numOffre)
 {
     echo '<h2 style="margin-left: 5px">'.$numOffre->idOffre.'</h2>';
 }
 ?>
 </div>
 <p>DESCRIPTION DE L'OFFRE</p>
 <div>
 <?php
 foreach($modifierMonOffre as $descOffre)
 {
     ?>
     <input type="text" name="descriOffre" style="width: 448px;" value="<?php echo $descOffre->descriptionOffre; ?>">
     <?php
 }
 ?>
 </div>
 <p>DATE DE LA DEMANDE</p> 
 <div >
 <?php 
 foreach($modifierMonOffre as $MaDateOffre)
 {
     ?>
     <input type="text" name="dateOffre" style="width: 448px;" value="<?php echo $MaDateOffre->dateOffre; ?>">
     <?php
 }
 ?>
</div>
<p>NOM DU SERVICE</p>
<div>
<?php
foreach($modifierMonOffre as $ServiceOffre)
{
    echo '<h2 style="margin-left: 5px">'.$ServiceOffre->nomService.'</h2>';  
}
?>
</div>
<input class='button'  type="submit" name="btnValider" value="valider"><br>
</form>

<form  methode="POST" action="<?php echo base_url(); ?>index.php/Controller_login/utilisateur/retour">
<input  class='button' type="submit" value="Home">
</form>


</body>
</html>