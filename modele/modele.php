<?php

    function getEleves(){
        $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '');
       $eleves = $bdd->query('select CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat , nb_absences from eleves');
        return $eleves;
    }
    
    // effectuee la cnx a la base de donnee
    //instancie et renvoie l'objectif PDO associé
    function getBdd() {
        $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '');
        return $bdd;
    }
   
   $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

   //Renvoie les informations sur un eleve
function getEleve($idEleve) {
$bdd = getBdd();
$eleve = $bdd->prepare('select CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat , nb_absences from eleves'
. ' where ID_eleve=?');
$eleve->execute(array($idEleve));
if ($eleve->rowCount() == 1)
return $eleve->fetch(); // Accès à la première ligne de résultat
else
throw new Exception("Aucun eleve ne correspond à l'identifiant '$idEleve'");
}
// Renvoie la liste des commentaires associés à un eleve
function getCommentaires($idEleve) {
$bdd = getBdd();
$commentaires = $bdd->prepare('select CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat , nb_absences from eleves'
. ' where ID_eleve=?');
$commentaires->execute(array($idEleve));
return $commentaires; }

?>
