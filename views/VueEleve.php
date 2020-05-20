<?php $this->titre="Gestion des eleves - " .$eleve['Nom']; ?>
<article>
<header>
<h1 class="nomeleve"><?= $eleve['Nom'] ?></h1>
<h1 class="nomeleve"><?= $eleve['Prenom'] ?></h1>
</header>
<p>CNE°<?= $eleve['CNE'] ?></p>
<p><img height="70px" width="90px" src="<?= $eleve["Photo"]; ?>"/></p>
<p>ETAT:<?= $eleve['etat'] ?></p>
</article>
<hr />
<header>
<h1 id="absence">Recapitulatif des absences de <?= $eleve['Nom'] ?></h1>
</header>
<table border="5px">
    <tr>
        <th>MATIERE</th>
        <th>DATE</th>
        <th>NOMBRE_heure</th>
</tr>
<?php foreach ($absences as $absence): ?>
    <tr>
        <td><?= $absence["matiere"]; ?></td>
        <td><time><?= $absence["date"]; ?></time></td>
        <td><?= $absence["nbr_h"]; ?></td>
</tr>
<?php endforeach; ?>
</table>
</br>
<h1 id="absence">Le total des absences par matiere de <?= $eleve['Nom'] ?></h1>
<table border="5px">
    <tr>
        <th>MATIERE</th>
        <th>TOTAL</th>
</tr>
<?php foreach ($Tabsences as $Tabsence): ?>
    <tr>
        <td><?= $Tabsence["matiere"]; ?></td>
        <td><?= $Tabsence["sum(nbr_h)"]; ?></td>
</tr>
<?php endforeach; ?>
</table>
<h1 id="absence">TOTAL</h1>
<?php foreach ($Tabsencess as $Tabsence): ?>
<?php echo $Tabsence["sum(nbr_h)"]; ?> Heure(s)<hr />
<?php endforeach; ?>
<form method="post" action="index.php?action=ajouter">
<input id="matiere" name="matiere" type="text" placeholder="la matiere :"
required /><br />
<input id="nbr_h" name="heure" placeholder="nombre d heure" required><br />
<input type="hidden" name="cneeleve" value="<?= $eleve['CNE'] ?>" />
<input type="submit" value="ajouter" />
</form>


