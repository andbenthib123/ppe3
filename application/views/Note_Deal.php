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
</head>
<body>
<p>NUMERO DU DEAL</p>
 <?php 
 foreach($infoDeal as $numDeal)
    {
        echo "<h1>".$numDeal->idUser." - ".$numDeal->photoUser."<h1/>";
   }  
 ?>
</body>
</html>