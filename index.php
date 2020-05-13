<?php
require('controller/controleur.php');
try {
if (isset($_GET['action'])) {
if ($_GET['action'] == 'eleve') {
if (isset($_GET['id'])) {
$idEleve = intval($_GET['id']);
if ($idEleve != 0)
eleve($idEleve);
else
throw new Exception("Identifiant d élève non valide");
}
else
throw new Exception("Identifiant d élève non défini");
}
else
throw new Exception("Action non valide");
}
else {
accueil(); // action par défaut
}
}
catch (Exception $e) {
erreur($e->getMessage());
}
?>

