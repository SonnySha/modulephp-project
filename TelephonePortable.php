<?php
// Définition de la classe TelephonePortable
class TelephonePortable {

    // Attributs

    public $modele; // Marque et modèle du téléphone
    private $numeroTelephone; // Numéro de tél. en 06
    private $estEnVeille; // Si téléphone en veille
    private $applicationsInstallees; // Liste des applications installées
    
    // Méthodes

    /**
    * Méthode de mise sous tension du téléphone
    */
    public function allumer() { }

    /**
    * Méthode pour éteindre le téléphone
    */
    public function eteindre() { }

    /**
    * Méthode pour éteindre le téléphone
    */
    public function mettreEnVeille() { }

    /**
    * Méthode d’envoi d’un SMS
    *
    * @param String $numeroDestinataire Numéro de téléphone à qui envoyer le SMS 
    * @param String $contenu Texte du SMS
    */
    public function envoyerSms($numeroDestinataire, $contenu) { }
}
?>