<?php
if (!defined('FORMPAGE')){
	header('Location: ../index.php');
}
/*******************************************************************************/
?>
<h3 class="font-thin center">Merci pour votre participation !</h3>
<p>Si vous n'avez pas &eacute;t&eacute; contact&eacute; directement par urgencemedodonto.fr (enquete@urgencemedodonto.fr) et que vous souhaitez recevoir les r&eacute;sultats de l'enqu&ecirc;te ainsi que les fiches m&eacute;mos sur les conduites &agrave; tenir en cas d'urgence au cabinet, vous pouvez laisser votre adresse email puis cliquer sur "Finir le questionnaire".</p>
<p><em>N.B. : Votre adresse email sera stock&eacute;e &agrave; part rendant tout recoupement avec vos r&eacute;ponses impossible garantissant ainsi l'anonymat du questionnaire.</em></p>
<form method="post" action="index.php?page=form" role="form">
    <input name="email" class="form-control" type="email" placeholder="Entrez votre adresse email ..."><br/>
	<div class="text-center">
		<button type="submit" name="nextForm" value="submit" class="btn btn-success btn-lg center">Finir le questionnaire </button>
	</div>
    <input type="hidden" name="formPageResponce" value="6">
</form>