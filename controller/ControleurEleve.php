<?php
require_once 'modele/Eleve.php';
require_once 'modele/Absence.php';
require_once 'views/Vue.php';
class ControleurEleve {
private $eleve;
private $absence;
private $Tabsences;
private $Tabsencess;

public function __construct() {
$this->eleve = new Eleve();
$this->absence = new Absence();
}
// Affiche les détails sur un élève
public function eleve($cneeleve) {
$eleve= $this->eleve->geteleve($cneeleve);
$absences = $this->absence->getabsences($cneeleve);
$Tabsences = $this->absence->totalabsence($cneeleve);
$Tabsencess = $this->absence->totalabsences($cneeleve);
$vue = new Vue("Eleve");
$vue->generer(array('eleve' => $eleve, 'absences' => $absences, 'Tabsences' => $Tabsences, 'Tabsencess' => $Tabsencess));
}
// Ajoute une absence à un eleve
public function ajouter($matiere, $nbr_h, $cneeleve) {
    // Sauvegarde de l'absence
    $this->absence->ajouterAbsence($matiere, $nbr_h, $cneeleve);
    // Actualisation de l'affichage de l'élève
    $this->eleve($cneeleve);
    }
}