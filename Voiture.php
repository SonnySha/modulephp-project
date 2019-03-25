<?php
// Définition de la classe TelephonePortable
class Voiture {

    // Attributs

    private $marque = 'Bentley'; // Marque de la voiture
    private $nombrePlaces = 5; // Nombre de places
    private $estDemarree = false; // Si la voiture est démarrée
    
    // Méthodes

    /**
    * Accesseur pour l'attribut $marque
    */
    public function getMarque() {
        return $this->marque;
    }

    /**
    * Accesseur pour l'attribut $nombrePlaces
    */
    public function getNombrePlaces() {
        return $this->nombrePlaces;
    }

    /**
    * Accesseur pour l'attribut $estDemarree
    */
    public function getEstDemarree() {
        if($this->estDemarree) {
            return "La voiture est démarrée";
        } else {
            return "La voiture n'est pas démarrée";
        }

        return $this->estDemarree ? 
                "La voiture est démarrée" :
                "La voiture n'est pas démarrée";
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