<?php

$noError = true;
/* ***************************
 * ********** Si tous les champs sont présents
 * ***************************
 */
if (!isset($_POST['mail'])) {
    echoMsgError("Le champ avec votre mail est manquant");
    $noError = false;
}
if (!isset($_POST['password'])) {
    echoMsgError("Le champ avec le mot de passe est manquant");
    $noError = false;
}

/*
* ***************************
*  ******  Si les champs sont vides ou seulement des espaces
* ***************************
*/
if (empty(trim($_POST['mail']))) {
    //le champ mail est vide
    echoMsgError("Le champs avec le mail est vide");
    $noError = false;
}
if (empty(trim($_POST['password']))) {
    //le champ password est vide
    echoMsgError("Le champs avec le mot de passe est vide");
    $noError = false;
}

/*
* ***************************
*  ******  Si les donnés entrées correspondent bien au format attendu
* ***************************
*/
if (strlen($_POST['password']) < 8) {
    //Le mdp na pas plus de 8caractere
    echoMsgError("Le mot de passe doit contenir plus de 8 caractére");
    $noError = false;
}

if (intval(substr($_POST['password'], 0, 1)) == 0) {
    //La 1er lettre n'est pas un chiffre
    echoMsgError("La premier lettre du mot de passe n'est pas un chiffre");
    $noError = false;
}

if ($noError) {
    
}

/**********
 ******* FONCTION
 */

/* Fonction qui va retourner une balise html stylisé en rouge avec le texte en % qui indiquera à lutilisateur qu'une erreur est survenue
* @param string $str L'avertissement à afficher'
* @return un echo avec une balise html avec du texte stylisé par bootstrap
*/
function echoMsgError($str) {
    $baliseLienVersFormulaire = "<a href='connect.php'>Retourner vers le formulaire</a>";
    echo "<div class='alert alert-danger' role='alert'>$str ! <strong>$baliseLienVersFormulaire</strong></div>";
}

