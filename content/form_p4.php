<?php
if (!defined('FORMPAGE')){
	header('Location: ../index.php');
}
/*******************************************************************************/
?>
<form method="post" action="index.php?page=form" role="form">
	<h3 class="font-thin">
        <span class="badge <?php errorLabel(7,$ERREUR_LABEL) ?>">7</span> Avez-vous b&eacute;n&eacute;fici&eacute; d'une formation aux urgences m&eacute;dicales au cabinet dentaire ?
    </h3>
    <div class="btn-group" data-toggle="buttons">
		<label class="btn btn-default">
			<input name="formationUrgence" type="radio" value="1" <?php loadSession('formationUrgence','',1); ?> required>
			<span class="glyphicon glyphicon-ok text-active"></span>  Oui</label>
		<label class="btn btn-default">
			<input name="formationUrgence" type="radio" value="0" <?php loadSession('formationUrgence','',0); ?> required>
			<span class="glyphicon glyphicon-ok text-active"></span>  Non</label>
	</div>
    <label> Si <strong>&#39;oui&#39;</strong>, en quelle ann&eacute;e ? (ex. 1989) <input type="number" name="formationUrgenceAnnee" min="1914" max="2014" value="<?php loadSession('formationUrgenceAnnee',''); ?>"></label>
    <h3 class="font-thin">
        <span class="badge <?php errorLabel(8,$ERREUR_LABEL) ?>">8</span> Si oui, quelle est votre fr&eacute;quence de formation aux urgences m&eacute;dicales au cabinet dentaire ?
    </h3>
    <select class="form-control" name="freqFormationUrgence">
        <option value=""> Pas de formation aux urgences m&eacute;dicales au cabinet dentaire </option>
        <option value="1" <?php loadSession('freqFormationUrgence','',1,true); ?>>Tous les 3 mois</option>
        <option value="2" <?php loadSession('freqFormationUrgence','',2,true); ?>>Tous les 6 mois</option>
        <option value="3" <?php loadSession('freqFormationUrgence','',3,true); ?>>Tous les ans</option>
        <option value="4" <?php loadSession('freqFormationUrgence','',4,true); ?>>Tous les 2 ans</option>
        <option value="5" <?php loadSession('freqFormationUrgence','',5,true); ?>>Tous les 3 ans</option>
        <option value="6" <?php loadSession('freqFormationUrgence','',6,true); ?>>Tous les 4 ans</option>
        <option value="6" <?php loadSession('freqFormationUrgence','',7,true); ?>>Tous les 5 ans et plus</option>
    </select>
    <h3 class="font-thin"><span class="badge <?php errorLabel(9,$ERREUR_LABEL) ?>">9</span> Pour vous quel est le meilleur compl&eacute;ment de formation aux urgences m&eacute;dicales au cabinet dentaire ?</h3>
    <div class="list-group">
		<label  class="list-group-item">
			<input type="checkbox" name="video" <?php loadSession('video'); ?>>
			Vid&eacute;o</label>
		<label class="list-group-item">
			<input type="checkbox" name="livre" <?php loadSession('livre'); ?>>
			Livre</label>
		<label class="list-group-item">
			<input type="checkbox" name="fiches" <?php loadSession('fiches'); ?>>
			Fiches m&eacute;mos</label>
	</div>
	<div class="text-center">
        <button id="popover" type="submit" name="prevForm" value="submit" class="btn btn-default btn-lg pull-left"data-container="body" data-toggle="popover" data-placement="top" data-content="Merci de r&eacute;pondre &agrave; toutes les questions..."><span class="glyphicon glyphicon-chevron-left"></span> Pr&eacute;c&eacute;dent</button>
		<button id="popover2" type="submit" name="nextForm" value="submit" class="btn btn-default btn-lg pull-right" data-container="body" data-toggle="popover" data-placement="top" data-content="Merci de r&eacute;pondre &agrave; toutes les questions...">Suivant <span class="glyphicon glyphicon-chevron-right"></span></button>
	</div>
    <input type="hidden" name="formPageResponce" value="4">
</form>