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
        <link href="<?php echo base_url();?>./CSS/deal.css" rel="stylesheet">  

       
        
          
</head>
<body>
    <?php 
    foreach($user as $leUser)
 {
    echo"<div id='divPhoto'>"; 
    echo"<div class='ok' onclick='demOffreUserSelectionne(".$leUser->idUser.",".$leUser->idService.")'>";
    echo"<div class='div'>";
    echo"<img class='photoDeals'  value='".$leUser->idUser."'  src='".$leUser->photoUser."' >";
    echo"<p>".$leUser->nomUser."</p>";
    echo"</div>";
    echo"</div>";
echo"</div>";

 }    
     ?>

</body>
</html>
