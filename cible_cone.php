<?php
/**
 * Validation des données
 */
// Si le champ "Nom cône" n'est pas défini
if (!isSet($_POST['nom_cone'])) {
    echo "Le champ « Nom cône » n'est pas défini." . "<br />";
}
// Si le champ "Rayon base cône" n'est pas défini
if (!isSet($_POST['rayon_base_cone'])) {
    echo "Le champ « Rayon base cône » n'est pas défini." . "<br />";
}
// Si le champ "Hauteur cône" n'est pas défini
if (!isSet($_POST['hauteur_cone'])) {
    echo "Le champ « Hauteur cône » n'est pas défini." . "<br />";
}

// Si le champ "Nom cône" n'est pas renseigné
if (empty(trim($_POST['nom_cone']))) {
    echo "Le champ « Nom cône » est vide." . "<br />";
}
// Si le champ "Rayon base cône" n'est pas renseigné
if (empty(trim($_POST['rayon_base_cone']))) {
    echo "Le champ « Rayon base cône » est vide." . "<br />";
}
// Si le champ "Hauteur cône" n'est pas renseigné
if (empty(trim($_POST['hauteur_cone']))) {
    echo "Le champ « Hauteur cône » est vide." . "<br />";
}

// Si le champ "Nom cône" n'est pas une chaîne de caractère
if (!is_string($_POST['nom_cone'])) {
    echo "Le champ « Nom cône » est n'est pas valide." . "<br />";
}
// Si le champ "Rayon base cône" n'est pas une valeur numérique
if (!is_numeric($_POST['rayon_base_cone'])) {
    echo "Le champ « Rayon base cône » est n'est pas valide." . "<br />";
}
// Si le champ "Hauteur cône" n'est pas une valeur numérique
if (!is_numeric($_POST['hauteur_cone'])) {
    echo "Le champ « Hauteur cône » est n'est pas valide." . "<br />";
}

/**
 * Fin de la validation des données
 */


 
?>