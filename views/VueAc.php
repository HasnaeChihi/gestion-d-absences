<?php $titre = 'Gestion des élèves' ;
foreach ($eleves as $eleve) :
	$et="";
	$lien="";
	if($eleve["etat"]=="true")
	{
		$et="active";
		$lien="activer.php?cne=".$eleve["CNE"]."&etat=false";
	}
	else
	{
		$et="desactive";
		$lien="activer.php?cne=".$eleve["CNE"]."&etat=true";
	}
	?>
    <tr>
	<td><a href="index.php?action=eleve&id=<?= $eleve['ID_eleve'] ?>"><?= $eleve["CNE"]; ?></a></td>


		<td><?= $eleve["CNE"]; ?></td>
		<td><?= $eleve["Nom"]; ?></td>
		<td><?= $eleve["Prenom"]; ?></td>
        <td><?= $eleve["Adresse"]; ?></td>
        <td><?= $eleve["Ville"]; ?></td>
        <td><?= $eleve["email"]; ?></td>
        <td><?= $eleve["Photo"]; ?></td>
        <td><?= $eleve["nb_absences"]; ?></td>
		<td><a href="<?= $lien; ?>"><?= $et; ?></a></td>
	</tr>

	<?php endforeach; ?>
	<?php $contenu = ob_get_clean(); ?>
	<?php require_once 'gabarit.php'; ?>

