<?php
// Vérification de l'existence des trois valeurs pour les clés
// firstName, lastName et favColour.
// Si elles existent, affichage d'une phrase de succès,
// sinon, affichage d'une phrase d'erreur.
if (isSet($_GET['firstName'])
        && isSet($_GET['lastName'])
        && isSet($_GET['middleName'])
        && isSet($_GET['favColour'])) {
    echo "Mes informations : je m'appelle " . $_GET['firstName'] . " " . $_GET['middleName'] . " " . $_GET['lastName'] . " et ma couleur préférée est " . $_GET['favColour'] . ".";
} else {
    echo "Il manque au moins une information.";
}

// Affichage de toutes les associations clé-valeur
// du tableau superglobal $_GET
echo '<ul>';
foreach ($_GET as $cle => $valeur) {
    echo '<li>';
    echo $cle . ' : ' . $valeur; 
    echo '</li>';
}
echo '</ul>';

?>