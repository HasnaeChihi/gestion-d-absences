<?php  $titre = 'Gestion des élèves' ; ?>
<?php ob_start(); ?>
<p> Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>
<?php requice_once 'gabarit.php'; ?>
       