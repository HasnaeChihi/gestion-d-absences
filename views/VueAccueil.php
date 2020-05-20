<?php $this->titre = 'Gestion des élèves' ; ?>
<h1 id="titre">Liste des élèves</h1>
<table>
	<tr>
        <td>CNE</td>
		<td>Nom</td>
		<td>Prénom</td>
		<td>Adresse</td>
        <td>Ville</td>
        <td>Email</td>
        <td>Photo</td>
        <td>etat</td>
	</tr>

<?php foreach ($eleves as $eleve) {
	$et="";
	$lien="";
	if($eleve["etat"]=="true")
	{
		$et="active";
		$lien="index.php?action=activer&cneeleve=".$eleve["CNE"]."&etat=false"; 
	}
	else
	{
		$et="desactive";
		$lien="index.php?action=activer&cneeleve=".$eleve["CNE"]."&etat=true";
	}
	?>
    <tr>

        <td><?= $eleve["CNE"]; ?></td>
		<td><?= $eleve["Nom"]; ?></td>
		<td><?= $eleve["Prenom"]; ?></td>
        <td><?= $eleve["Adresse"]; ?></td>
        <td><?= $eleve["Ville"]; ?></td>
        <td><?= $eleve["email"]; ?></td>
        <td ALIGN="center"><img height="60px" width="90px" src="<?= $eleve["Photo"]; ?>"/></td>
		<td><a href="<?= $lien; ?>"><?= $et; ?></a></td>
		<td><a href ="<?= "index.php?action=eleve&cneeleve=".$eleve['CNE'] ?>"><button type='button'>
      Details d'absences</button></a></td>
	</tr>
<?php	
}  ?>
</table>	

