<?php
/**
 * Validation des données
 */
// Si le champ "Livre favori" n'est pas défini
if (!isSet($_POST['fav_book'])) {
    echo "Le champ « Livre favori » n'est pas défini." . "<br />";
}
// Si le champ "Note" n'est pas défini
if (!isSet($_POST['fav_book_mark'])) {
    echo "Le champ « Note » n'est pas défini." . "<br />";
}
// Si le champ "Livre favori" n'est pas renseigné
if (empty($_POST['fav_book'])) {
    echo "Le champ « Livre favori » est vide." . "<br />";
}
// Si le champ "Note" n'est pas renseigné
if (empty($_POST['fav_book_mark'])) {
    echo "Le champ « Note » est vide." . "<br />";
}
/**
 * Fin de la validation des données
 */
// Si tous les champs sont définis et renseignés
if(isSet($_POST['fav_book'])
        && isSet($_POST['fav_book_mark'])
        && !empty($_POST['fav_book'])
        && !empty($_POST['fav_book_mark'])) {
    echo 'Le livre favori est ' . htmlspecialchars($_POST['fav_book']) .
            ' avec une note de ' . htmlspecialchars($_POST['fav_book_mark']);
}

?>