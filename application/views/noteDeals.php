<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url();?>./JQuery/jquery-3.1.1.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.js"></script>
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css" rel="stylesheet">  
        <link href="<?php echo base_url();?>./CSS/style_demandeetoffre.css" rel="stylesheet">     
</head>
<body>
<form method="get">
    <h3>numero du deal</h3>
    <input disabled value="<?php echo $_SESSION['idDeal'];?>" type="text" name="txtIdDeal">
    <h3>votre service</h3>
    <input disabled type="text" value="<?php echo$_SESSION['nomService'];?>" name="txtService">
    <h3>service de:<?php echo$_SESSION['nomUser'];?></h3>
    <input disabled type="text" value="<?php echo$_SESSION["service2"];?>" name="txtService2">
    <h3>votre note</h3>
    <input value="<?php echo$_SESSION['noteUser1'];?>" type="text" name="txtMaNote">
    <h3> la note de:<?php echo$_SESSION['nomUser'];?></h3>
    <input disabled value="<?php echo$_SESSION['noteUser2'];?>" type="text" name="txtSaNote"><br>
<input type="submit" value="valider"  name="btnValider">

</form>
<form methode='GET' action="<?php echo base_url()?>index.php/Controller_login/utilisateur">
    <input class='btnCreation' type='submit' name='btnHome' value='retour'>
    </form>


</body>
</html>