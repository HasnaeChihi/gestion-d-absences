<?php $titre = "Gestion des élèves - " ; ?>

<?php ob_start(); ?>

<h1><b>BIENVENUE <?p= $eleve['Nom']; ?></b></h1>


	<td><?= $eleve["CNE"]; ?></td>
	<td><?= $eleve["Nom"]; ?></td>
	<td><?= $eleve["Prenom"]; ?></td>
    <td><?= $eleve["Adresse"]; ?></td>
    <td><?= $eleve["Ville"]; ?></td>
    <td><?= $eleve["email"]; ?></td>
    <td><?= $eleve["Photo"]; ?></td>
    <td><?= $eleve["etat"]; ?></td>
    <td><?= $eleve["nb_absences"]; ?></td>
	

<?php if ($eleve['etat'] == 1) { ?>

}
<?php } ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
