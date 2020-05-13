<?php
require 'modele/modele.php';
// Affiche la liste de tous les eleves
function accueil() {
$eleves = getEleves();
require 'views/VueAc.php';
}
// Affiche les détails sur un eleve
function Eleve($idEleve) {
$eleve = getEleve($idEleve);
$commentaires = getCommentaires($idEleve);
require 'views/VueEleve.php';
}
// Affiche une erreur
function erreur($msgErreur) {
require 'views/VueErreur.php';
}
?>

