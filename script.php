<?php
    
// Inclusion de la classe (qui se trouve dans un autre fichier)
include('Voiture.php');

$maVoiture1 = new Voiture('Peugeot', 3, false);
$maVoiture2 = new Voiture('Citroën', 5, true);

echo $maVoiture1;
echo '<br />';
echo $maVoiture2;

?>