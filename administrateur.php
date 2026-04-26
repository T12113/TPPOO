<?php
require_once "Utilisateur.php";

class Administrateur extends Utilisateur {

    public function supprimerUtilisateur() {
        return "Utilisateur supprimé";
    }

    public function afficherRole() {
        return "Je suis un administrateur";
    }

    public function afficher() {
        echo $this->afficherInfos() . "<br>";
        echo $this->afficherRole() . "<br>";
    }
}
?>