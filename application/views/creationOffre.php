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

    <form method='GET' action="<?php echo base_url()?>index.php/C_creationOffre/insererOffre">
    <div>
    <h3>creation d'une Offre</h3><br>
    <label>numero de l'offre</label><br>
    <input type="text" value="<?php echo$_SESSION['idOffre'];?>" id="txtidOffre" name="txtidOffre"><br>
    <label>description de l'offre</label><br>
    <textarea name="txtDescriptionsOffre" id="txtDescriptionsOffre"></textarea><br>
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
    <input type='submit' name='btnValider' value='valider' onclick='insereOffreAjax()'><br>
   
    </div>
    </form>
    <form methode='GET' action="<?php echo base_url()?>index.php/C_creationOffre/retour">
    <input type='submit' name='btnHome' value='home'>
    </form>
</body>
</html>