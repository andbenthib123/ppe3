<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php
    echo 'Mes demandes';
     foreach($lesDemandes as $laDemande)
     {
        echo "<p>".$laDemande->descriptionDemande."</p>";
     }
     echo 'Mes Offres';
     foreach($lesOffres as $uneOffre)
     {
         echo "<p>".$uneOffre->descriptionOffre."</p>";
     }
    ?>
</body>
</html>