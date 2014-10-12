<?php
if (!defined('FORMPAGE')){
	header('Location: ../index.php');
}
/*******************************************************************************/
?>
<form method="post" action="index.php?page=form" role="form">
	<div class="m-l">
		<h3 class="font-thin"><span class="badge <?php errorLabel(10,$ERREUR_LABEL) ?>">10</span> Disposez-vous du mat&eacute;riel et des m&eacute;dicaments suivants et savez-vous les utiliser ?</h3>
	</div>
<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th>Pr&eacute;sent dans le cabinet</th>
				<th>Maitrise de l'utilisation</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>Une source d'oxyg&egrave;ne</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_oxygene">
							<input name="prst_oxygene" type="radio" value="1" <?php loadSession('prst_oxygene','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_oxygene">
							<input name="prst_oxygene" type="radio" value="0" <?php loadSession('prst_oxygene','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_oxygene">
							<input name="utl_oxygene" type="radio" value="1" <?php loadSession('utl_oxygene','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_oxygene">
							<input name="utl_oxygene" type="radio" value="0" <?php loadSession('utl_oxygene','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>Ballon autoremplisseur &agrave; valve unidirectionnelle</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_BAVU">
							<input name="prst_BAVU" type="radio" value="1" <?php loadSession('prst_BAVU','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_BAVU">
							<input name="prst_BAVU" type="radio" value="0" <?php loadSession('prst_BAVU','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_BAVU">
							<input name="utl_BAVU" type="radio" value="1" <?php loadSession('utl_BAVU','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_BAVU">
							<input name="utl_BAVU" type="radio" value="0" <?php loadSession('utl_BAVU','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>Canule oropharyng&eacute;e (Guedel / Mayo)</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_canule">
							<input name="prst_canule" type="radio" value="1" <?php loadSession('prst_canule','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_canule">
							<input name="prst_canule" type="radio" value="0" <?php loadSession('prst_canule','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_canule">
							<input name="utl_canule" type="radio" value="1" <?php loadSession('utl_canule','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_canule">
							<input name="utl_canule" type="radio" value="0" <?php loadSession('utl_canule','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Un d&eacute;fibrillateur (semi)automatique</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_DSA">
							<input name="prst_DSA" type="radio" value="1" <?php loadSession('prst_DSA','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_DSA">
							<input name="prst_DSA" type="radio" value="0" <?php loadSession('prst_DSA','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_DSA">
							<input name="utl_DSA" type="radio" value="1" <?php loadSession('utl_DSA','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_DSA">
							<input name="utl_DSA" type="radio" value="0" <?php loadSession('utl_DSA','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Un tensiom&egrave;tre</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_tensiometre">
							<input name="prst_tensiometre" type="radio" value="1" <?php loadSession('prst_tensiometre','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_tensiometre">
							<input name="prst_tensiometre" type="radio" value="0" <?php loadSession('prst_tensiometre','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_tensiometre">
							<input name="utl_tensiometre" type="radio" value="1" <?php loadSession('utl_tensiometre','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_tensiometre">
							<input name="utl_tensiometre" type="radio" value="0" <?php loadSession('utl_tensiometre','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>Mat&eacute;riel d'injection sous cutan&eacute; et/ou intramusculaire</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_IM">
							<input name="prst_IM" type="radio" value="1" <?php loadSession('prst_IM','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_IM">
							<input name="prst_IM" type="radio" value="0" <?php loadSession('prst_IM','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_IM">
							<input name="utl_IM" type="radio" value="1" <?php loadSession('utl_IM','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_IM">
							<input name="utl_IM" type="radio" value="0" <?php loadSession('utl_IM','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>Mat&eacute;riel d'injection intravasculaire</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_IV">
							<input name="prst_IV" type="radio" value="1" <?php loadSession('prst_IV','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_IV">
							<input name="prst_IV" type="radio" value="0" <?php loadSession('prst_IV','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_IV">
							<input name="utl_IV" type="radio" value="1" <?php loadSession('utl_IV','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_IV">
							<input name="utl_IV" type="radio" value="0" <?php loadSession('utl_IV','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>De l'adr&eacute;naline / &eacute;pin&eacute;phrine</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_adrenaline">
							<input name="prst_adrenaline" type="radio" value="1" <?php loadSession('prst_adrenaline','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_adrenaline">
							<input name="prst_adrenaline" type="radio" value="0" <?php loadSession('prst_adrenaline','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_adrenaline">
							<input name="utl_adrenaline" type="radio" value="1" <?php loadSession('utl_adrenaline','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_adrenaline">
							<input name="utl_adrenaline" type="radio" value="0" <?php loadSession('utl_adrenaline','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
                        <tr>
				<td><strong>De la trinitrine</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_trinitrine">
							<input name="prst_trinitrine" type="radio" value="1" <?php loadSession('prst_trinitrine','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_trinitrine">
							<input name="prst_trinitrine" type="radio" value="0" <?php loadSession('prst_trinitrine','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_trinitrine">
							<input name="utl_trinitrine" type="radio" value="1" <?php loadSession('utl_trinitrine','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_trinitrine">
							<input name="utl_trinitrine" type="radio" value="0" <?php loadSession('utl_trinitrine','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>Du glucagon</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_glucagon">
							<input name="prst_glucagon" type="radio" value="1" <?php loadSession('prst_glucagon','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_glucagon">
							<input name="prst_glucagon" type="radio" value="0" <?php loadSession('prst_glucagon','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_glucagon">
							<input name="utl_glucagon" type="radio" value="1" <?php loadSession('utl_glucagon','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_glucagon">
							<input name="utl_glucagon" type="radio" value="0" <?php loadSession('utl_glucagon','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
				<td><strong>Du salbutamol et/ou terbutaline</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="prst_salbutamol">
							<input name="prst_salbutamol" type="radio" value="1" <?php loadSession('prst_salbutamol','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="prst_salbutamol">
							<input name="prst_salbutamol" type="radio" value="0" <?php loadSession('prst_salbutamol','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="utl_salbutamol">
							<input name="utl_salbutamol" type="radio" value="1" <?php loadSession('utl_salbutamol','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="utl_salbutamol">
							<input name="utl_salbutamol" type="radio" value="0" <?php loadSession('utl_salbutamol','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
        </tbody>
	</table>
	<div class="text-center">
		<button id="popover" type="submit" name="prevForm" value="submit" class="btn btn-default btn-lg pull-left"data-container="body" data-toggle="popover" data-placement="top" data-content="Merci de r&eacute;pondre &agrave; toutes les questions..."><span class="glyphicon glyphicon-chevron-left"></span> Pr&eacute;c&eacute;dent</button>
		<button id="popover2" type="submit" name="nextForm" value="submit" class="btn btn-default btn-lg pull-right" data-container="body" data-toggle="popover" data-placement="top" data-content="Merci de r&eacute;pondre &agrave; toutes les questions...">Suivant <span class="glyphicon glyphicon-chevron-right"></span></button>
	</div>
    <input type="hidden" name="formPageResponce" value="5">
</form>