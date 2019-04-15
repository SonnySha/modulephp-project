<?php

$noError = true;
/* ***************************
 * ********** Si tous les champs sont présents
 * ***************************
 */
if (!isset($_POST['pseudo'])) {
    echoMsgError("Le champ avec votre pseudo est manquant");
    $noError = false;
}
if (!isset($_POST['mail'])) {
    echoMsgError("Le champ avec votre mail est manquant");
    $noError = false;
}
if (!isset($_POST['password'])) {
    echoMsgError("Le champ avec votre mot de passe est manquant");
    $noError = false;
}
if (!isset($_POST['password_confirmation'])) {
    echoMsgError("Le champ avec la vérification du mot de passe est manquant");
    $noError = false;
}

/*
* ***************************
*  ******  Si les champs sont vides ou seulement des espaces
* ***************************
*/
if (empty(trim($_POST['pseudo']))) {
    //le champ pseudo est vide
    echoMsgError("Le champs avec votre pseudo est vide");
    $noError = false;
}
if (empty(trim($_POST['mail']))) {
    //le champ avec le mail est vide
    echoMsgError("Le champs avec votre mail est vide");
    $noError = false;
}
if (empty(trim($_POST['password']))) {
    //le champ avec le premier mdp est vide
    echoMsgError("Le champs avec votre mot de passe est vide");
    $noError = false;
}
if (empty(trim($_POST['password_confirmation']))) {
    //le champ avec la verif du mdp est vide
    echoMsgError("Le champs avec la verification du mot de passe est vide");
    $noError = false;
}

/*
* ***************************
*  ******  Si les donnés entrées correspondent bien au format attendu
* ***************************
*/
if (!is_string($_POST['pseudo']) || is_numeric($_POST['pseudo'])) {
    //le champ avec le pseudo nest pas au bon format
    echoMsgError("Le champs avec votre pseudo n'est pas au bon format il ne dois pas être composé que de chiffre ou vide");
    $noError = false;
}
if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    //le champ nest pas au format mail
    echoMsgError("votre adresse mail n'est pas au bon format.");
    $noError = false;
}

if (!strlen($_POST['password']) >= 8) {
    //Le mdpfait moins de 8caractere
    echoMsgError("Votre âge n'est pas valide, vous devez avoir 13 ans pour vous inscrire");
    $noError = false;
}

if (!strlen($_POST['password']) > 8 && !strlen($_POST['password_confirmation']) > 8) {
    //Les deux mdp ne correspondent pas
    echoMsgError("Le mot de passe doit contenir plus de 8 caractére");
    $noError = false;
}

if (!is_int(intval(substr($_POST['password'], 0, 1)))) {
    //La 1er lettre n'est pas un chiffre
    echoMsgError("La premier lettre du mot de passe n'est pas un chiffre");
    $noError = false;
}

if ($_POST['password'] <> $_POST['password_confirmation']) {
    //Les deux mdp ne correspondent pas
    echoMsgError("Les deux mots de passe ne correspondent pas");
    $noError = false;
}

if ($noError) {
    // Inscription
    echo "Vous êtes inscrit : " . htmlspecialchars($_POST['pseudo-user']) . " avec le mail " . htmlspecialchars($_POST['mail-user']) . " vous avez " . htmlspecialchars($_POST['old-user']) . "ans et vous avez le mdp " . htmlspecialchars($_POST['password-user']) ;
}
