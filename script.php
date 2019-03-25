<?php
    
// Inclusion de la classe (qui se trouve dans un autre fichier)
include('Voiture.php');

$maVoiture1 = new Voiture();
$maVoiture2 = new Voiture();

// Appel d'une méthode
$maVoiture1->klaxonner();
echo '<br />';
$maVoiture2->klaxonner();
echo '<br />';

echo $maVoiture1->getMarque();
echo '<br />';
echo $maVoiture2->getMarque();
echo '<br />';
echo $maVoiture1->getNombrePlaces();
echo '<br />';
echo $maVoiture2->getNombrePlaces();
echo '<br />';
echo $maVoiture1->getEstDemarree();
echo '<br />';
echo $maVoiture2->getEstDemarree();
echo '<br />';

?>