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
    <link href="<?php echo base_url();?>./CSS/style_accueil.css" rel="stylesheet">  
    
</head>
<body>

    <form methode='GET' action="<?php echo base_url()?>index.php/C_creationFormulaire/insererFormulaire">
    <div>
    <h3>creation d'une demande</h3><br>
    <label>numero de la demande</label><br>
    <input input="text" value="<?php echo$_SESSION['iddemande'];?>" id="txtidDemande" name="txtidDemande"><br>
    <label>description de la demande</label><br>
    <textarea name="txtDescriptions" id="txtDescriptions"></textarea><br>
    <label>nom du service</label><br>
    <select name="txtSelect" id="txtSelect" options>
    <?php 
    foreach($service as $afficher)
    {
    echo"<option  value='".$afficher->idService."'>";
    echo $afficher->nomService;
    echo "</option>";
    }

    ?>
    </select><br>
    <input type='submit' name='btnValider' value='valider' onclick='service()'><br>
   
    </div>
    </form>
    <form methode='GET' action="<?php echo base_url()?>index.php/C_creationFormulaire/retour">
    <input type='submit' name='btnHome' value='home'>
    </form>
</body>
</html>