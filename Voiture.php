<?php
// Définition de la classe TelephonePortable
class Voiture {

    // Attributs

    private $marque = 'Bentley'; // Marque de la voiture
    private $nombrePlaces = 5; // Nombre de places
    private $estDemarree = false; // Si la voiture est démarrée
    
    // Méthodes

    /**
    * Méthode magique appelée automatiquement lors de l'instanciation de la classe :
    * contructeur
    */
    public function __construct($initMarque, $initNombrePlaces, $initEstDemarree) {
        $this->setMarque($initMarque);
        $this->setNombrePlaces($initNombrePlaces);
        $this->setEstDemarree($initEstDemarree);
    }

    /**
    * Méthode magique appelée automatiquement lorsque l'objet est traité comme une chaîne de caractères :
    * afficheur
    */
    public function __toString() {
        return 'Le voiture de marque ' . $this->getMarque() .
                ' a ' . $this->getNombrePlaces() . ' places et ' .
                $this->getEstDemarree();
    }

    /**
    * Accesseur pour l'attribut $marque
    */
    public function getMarque() {
        return $this->marque;
    }

    /**
    * Mutateur pour l'attribut $marque
    *
    * @param String $newMarque Nouvelle valeur pour l'attribut marque
    */
    public function setMarque($newMarque) {
        $this->marque = $newMarque;
    }

    /**
    * Accesseur pour l'attribut $nombrePlaces
    */
    public function getNombrePlaces() {
        return $this->nombrePlaces;
    }

    /**
    * Mutateur pour l'attribut $nombrePlaces
    *
    * @param Integer $newNombrePlace Nouvelle valeur pour l'attribut nombrePlaces
    */
    public function setNombrePlaces($newNombrePlaces) {
        if(!is_int($newNombrePlaces)) {
            echo "Le nombre de places doit être un entier !";
            return;
        }
        $this->nombrePlaces = $newNombrePlaces;
    }

    /**
    * Accesseur pour l'attribut $estDemarree
    */
    public function getEstDemarree() {
        return $this->estDemarree ? 
                "La voiture est démarrée" :
                "La voiture n'est pas démarrée";
    }

    /**
    * Mutateur pour l'attribut $estDemarree
    *
    * @param Boolean $newNombrePlace Nouvelle valeur pour l'attribut estDemarree
    */
    public function setEstDemarree($newEstDemarree) {
        $this->estDemarree = $newEstDemarree;
    }

    /**
    * Méthode de démarrage de la voiture
    */
    public function demarrer() { }

    /**
    * Méthode pour arrêter de la voiture
    */
    public function arreter() { }

    /**
    * Méthode pour klaxonner
    */
    public function klaxonner() {
        echo 'Pouët pouët';
    }

}
?>