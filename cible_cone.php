<?php
/**
 * Début de la validation des données
 */
$noErrors = true;

// Si le champ "Nom cône" n'est pas défini
if (!isSet($_POST['nom_cone'])) {
    echo "Le champ « Nom cône » n'est pas défini." . "<br />";
    $noErrors = false;
}
// Si le champ "Rayon base cône" n'est pas défini
if (!isSet($_POST['rayon_base_cone'])) {
    echo "Le champ « Rayon base cône » n'est pas défini." . "<br />";
    $noErrors = false;
}
// Si le champ "Hauteur cône" n'est pas défini
if (!isSet($_POST['hauteur_cone'])) {
    echo "Le champ « Hauteur cône » n'est pas défini." . "<br />";
    $noErrors = false;
}

// Si le champ "Nom cône" n'est pas renseigné
if (empty(trim($_POST['nom_cone']))) {
    echo "Le champ « Nom cône » est vide." . "<br />";
    $noErrors = false;
}
// Si le champ "Rayon base cône" n'est pas renseigné
if (empty(trim($_POST['rayon_base_cone']))) {
    echo "Le champ « Rayon base cône » est vide." . "<br />";
    $noErrors = false;
}
// Si le champ "Hauteur cône" n'est pas renseigné
if (empty(trim($_POST['hauteur_cone']))) {
    echo "Le champ « Hauteur cône » est vide." . "<br />";
    $noErrors = false;
}

// Si le champ "Nom cône" n'est pas une chaîne de caractère
// et qu'elle n'est pas consitutée uniquement de chiffres
if (!is_string($_POST['nom_cone']) || is_numeric($_POST['nom_cone'])) {
    echo "Le champ « Nom cône » est n'est pas valide." . "<br />";
    $noErrors = false;
}
// Si le champ "Rayon base cône" n'est pas une valeur numérique
if (!is_numeric($_POST['rayon_base_cone'])) {
    echo "Le champ « Rayon base cône » n'est pas valide." . "<br />";
    $noErrors = false;
}
// Si le champ "Hauteur cône" n'est pas une valeur numérique
if (!is_numeric($_POST['hauteur_cone'])) {
    echo "Le champ « Hauteur cône » n'est pas valide." . "<br />";
    $noErrors = false;
}
/**
 * Fin de la validation des données
 */

// S'il n'y a eu aucune erreur
if($noErrors) {
    // Définition de la constante PI
    define('MATH_PI', 3.141592);
    // Calcul du volume
    $volume = MATH_PI *
            floatval($_POST['rayon_base_cone']) *
            floatval($_POST['rayon_base_cone']) *
            floatval($_POST['hauteur_cone']) / 3;
    // Affichage de la phrase
    echo "Le volume du cône " . htmlspecialchars($_POST['nom_cone']) .
            " est : " . round($volume, 2);
}

?>