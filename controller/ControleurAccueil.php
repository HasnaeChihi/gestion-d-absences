<?php
require_once 'modele/Eleve.php';
require_once 'views/Vue.php';
class ControleurAccueil {
    private $eleve;
    public function __construct() {
    $this->eleve = new Eleve();
    }
    // Affiche la liste de tous les élèves
    public function accueil() {
    $eleves = $this->eleve->geteleves();
    $vue = new Vue("Accueil");
    $vue->generer(array('eleves' => $eleves));
    }
    //modifie l'état d'un élève et réaffiche l'accueil
    public function activation($cneeleve){  
        $req=$this->eleve->activer($cneeleve);
        $this->accueil();
    }
    }