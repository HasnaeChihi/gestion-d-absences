<?php
class Absence extends Modele {
    // Renvoie la liste des absences associées à un élève
 public function getabsences($cneeleve){
     $sql='SELECT matiere,date,nbr_h from absence where CNE=?';
    $absences=$this->executerRequete($sql, array($cneeleve));
    return $absences;
  }
   //renvoie le total des absences par matière
public function totalabsence($cneeleve){
$sql='SELECT matiere, sum(nbr_h) from absence where CNE=? group by matiere';
 $Tabsences=$this->executerRequete($sql, array($cneeleve));
 return $Tabsences;
 }
    //renvoie le total des absences
public function totalabsences($cneeleve){
$sql='SELECT sum(nbr_h) from absence where CNE=?';
 $Tabsencess=$this->executerRequete($sql, array($cneeleve));
 return $Tabsencess;
 } 
 // Ajoute une absence dans la base
public function ajouterAbsence($matiere, $nbr_h, $cneeleve) {
    $sql = 'INSERT into absence(matiere, date, nbr_h, CNE) values(?, ?, ?, ?)';
    $date = date(DATE_W3C); // Récupère la date courante
$this->executerRequete($sql, array($matiere, $date, $nbr_h, $cneeleve));
}
}