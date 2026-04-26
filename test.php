<?php
require_once "Client.php";
require_once "Employe.php";
require_once "Administrateur.php";

function afficherUtilisateur(Affichable $u) {
    $u->afficher();
}

$client = new Client(1, "Moussa", "m@mail.com", "moussa", "123", "premium");
$employe = new Employe(2, "Ali", "a@mail.com", "ali", "123", 200000);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin", "123");

echo "<h3>TEST</h3>";

$client->afficher();
$employe->afficher();
$admin->afficher();

echo $client->seConnecter() . "<br>";
echo $client->calculerReduction(10000) . "<br>";
echo $employe->calculerSalaireAnnuel() . "<br>";

afficherUtilisateur($client);
afficherUtilisateur($employe);
afficherUtilisateur($admin);

echo Utilisateur::afficherNombre();
?>