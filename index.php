<?php 
require "modules/Medecin.php";
require "modules/Patient.php";
 
$patient = new Patient('hamdi','ali');
$medcin = new Medcin('alawi','morad','les femmes');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  $patient->afficherNomComplet(); ?>
</body>
</html>