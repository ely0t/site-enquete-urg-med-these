<?php
if (!defined('FORMPAGE')){
	header('Location: ../index.php');
}
/*******************************************************************************/
?>
<form method="post" action="index.php?page=form" role="form">
	<h3 class="font-thin"><span class="badge <?php errorLabel(6,$ERREUR_LABEL) ?>">6</span>  Pensez-vous &ecirc;tre capable de diagnostiquer et/ou d'entreprendre les gestes et la th&eacute;rapeutique de premier secours dans les diff&eacute;rentes situations suivantes ? </h3>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th>Diagnostic</th>
				<th>Gestes et th&eacute;rapeutique<br/> de premier secours</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>Angine de poitrine, Angor et Infarctus du myocarde</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_angor">
							<input name="diag_angor" type="radio" value="1" <?php loadSession('diag_angor','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_angor">
							<input name="diag_angor" type="radio" value="0" <?php loadSession('diag_angor','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_angor">
							<input name="trt_angor" type="radio" value="1" <?php loadSession('trt_angor','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_angor">
							<input name="trt_angor" type="radio" value="0" <?php loadSession('trt_angor','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Crise hypertensive</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_hypertension">
							<input name="diag_hypertension" type="radio" value="1" <?php loadSession('diag_hypertension','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_hypertension">
							<input name="diag_hypertension" type="radio" value="0" <?php loadSession('diag_hypertension','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_hypertension">
							<input name="trt_hypertension" type="radio" value="1" <?php loadSession('trt_hypertension','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_hypertension">
							<input name="trt_hypertension" type="radio" value="0" <?php loadSession('trt_hypertension','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Dissection aortique</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_dissection">
							<input name="diag_dissection" type="radio" value="1" <?php loadSession('diag_dissection','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_dissection">
							<input name="diag_dissection" type="radio" value="0" <?php loadSession('diag_dissection','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_dissection">
							<input name="trt_dissection" type="radio" value="1" <?php loadSession('trt_dissection','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_dissection">
							<input name="trt_dissection" type="radio" value="0" <?php loadSession('trt_dissection','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Arr&ecirc;t cardio-vasculaire</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_arretcardiaque">
							<input name="diag_arretcardiaque" type="radio" value="1" <?php loadSession('diag_arretcardiaque','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_arretcardiaque">
							<input name="diag_arretcardiaque" type="radio" value="0" <?php loadSession('diag_arretcardiaque','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_arretcardiaque">
							<input name="trt_arretcardiaque" type="radio" value="1" <?php loadSession('trt_arretcardiaque','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_arretcardiaque">
							<input name="trt_arretcardiaque" type="radio" value="0" <?php loadSession('trt_arretcardiaque','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Malaise vaso-vagal</strong> </td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_vagal">
							<input name="diag_vagal" type="radio" value="1" <?php loadSession('diag_vagal','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_vagal">
							<input name="diag_vagal" type="radio" value="0" <?php loadSession('diag_vagal','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_vagal">
							<input name="trt_vagal" type="radio" value="1" <?php loadSession('trt_vagal','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_vagal">
							<input name="trt_vagal" type="radio" value="0" <?php loadSession('trt_vagal','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Malaise hypoglyc&eacute;mique</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_hypoglycemie">
							<input name="diag_hypoglycemie" type="radio" value="1" <?php loadSession('diag_hypoglycemie','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_hypoglycemie">
							<input name="diag_hypoglycemie" type="radio" value="0" <?php loadSession('diag_hypoglycemie','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_hypoglycemie">
							<input name="trt_hypoglycemie" type="radio" value="1" <?php loadSession('trt_hypoglycemie','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_hypoglycemie">
							<input name="trt_hypoglycemie" type="radio" value="0" <?php loadSession('trt_hypoglycemie','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
			<tr>
				<td><strong>Accident vasculaire c&eacute;r&eacute;bral</strong></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="diag_AVC">
							<input name="diag_AVC" type="radio" value="1" <?php loadSession('diag_AVC','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="diag_AVC">
							<input name="diag_AVC" type="radio" value="0" <?php loadSession('diag_AVC','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
				<td><div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" for="trt_AVC">
							<input name="trt_AVC" type="radio" value="1" <?php loadSession('trt_AVC','',1); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
						<label class="btn btn-default"  for="trt_AVC">
							<input name="trt_AVC" type="radio" value="0" <?php loadSession('trt_AVC','',0); ?> required>
							<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
					</div></td>
			</tr>
            <tr>
                <td><strong>Insuffisance surr&eacute;nalienne aigue</strong></td>
                <td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_ISA">
						<input name="diag_ISA" type="radio" value="1" <?php loadSession('diag_ISA','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_ISA">
						<input name="diag_ISA" type="radio" value="0" <?php loadSession('diag_ISA','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_ISA">
						<input name="trt_ISA" type="radio" value="1" <?php loadSession('trt_ISA','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_ISA">
						<input name="trt_ISA" type="radio" value="0" <?php loadSession('trt_ISA','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Crise d'asthme </strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_asthme">
						<input name="diag_asthme" type="radio" value="1" <?php loadSession('diag_asthme','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_asthme">
						<input name="diag_asthme" type="radio" value="0" <?php loadSession('diag_asthme','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_asthme">
						<input name="trt_asthme" type="radio" value="1" <?php loadSession('trt_asthme','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_asthme">
						<input name="trt_asthme" type="radio" value="0" <?php loadSession('trt_asthme','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Accident d'inhalation</strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_inhalation">
						<input name="diag_inhalation" type="radio" value="1" <?php loadSession('diag_inhalation','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_inhalation">
						<input name="diag_inhalation" type="radio" value="0" <?php loadSession('diag_inhalation','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_inhalation">
						<input name="trt_inhalation" type="radio" value="1" <?php loadSession('trt_inhalation','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_inhalation">
						<input name="trt_inhalation" type="radio" value="0" <?php loadSession('trt_inhalation','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Oed&egrave;me de Quincke</strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_quincke">
						<input name="diag_quincke" type="radio" value="1" <?php loadSession('diag_quincke','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_quincke">
						<input name="diag_quincke" type="radio" value="0" <?php loadSession('diag_quincke','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_quincke">
						<input name="trt_quincke" type="radio" value="1" <?php loadSession('trt_quincke','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_quincke">
						<input name="trt_quincke" type="radio" value="0" <?php loadSession('trt_quincke','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Oed&egrave;me aig&uuml; du poumon </strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_OAP">
						<input name="diag_OAP" type="radio" value="1" <?php loadSession('diag_OAP','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_OAP">
						<input name="diag_OAP" type="radio" value="0" <?php loadSession('diag_OAP','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_OAP">
						<input name="trt_OAP" type="radio" value="1" <?php loadSession('trt_OAP','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_OAP">
						<input name="trt_OAP" type="radio" value="0" <?php loadSession('trt_OAP','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Embolie pulmonaire</strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_embolie">
						<input name="diag_embolie" type="radio" value="1" <?php loadSession('diag_embolie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_embolie">
						<input name="diag_embolie" type="radio" value="0" <?php loadSession('diag_embolie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_embolie">
						<input name="trt_embolie" type="radio" value="1" <?php loadSession('trt_embolie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_embolie">
						<input name="trt_embolie" type="radio" value="0" <?php loadSession('trt_embolie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Intoxication due aux anesth&eacute;siques</strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_anesthesie">
						<input name="diag_anesthesie" type="radio" value="1" <?php loadSession('diag_anesthesie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_anesthesie">
						<input name="diag_anesthesie" type="radio" value="0" <?php loadSession('diag_anesthesie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_anesthesie">
						<input name="trt_anesthesie" type="radio" value="1" <?php loadSession('trt_anesthesie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_anesthesie">
						<input name="trt_anesthesie" type="radio" value="0" <?php loadSession('trt_anesthesie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Crise d'urticaire</strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_urticaire">
						<input name="diag_urticaire" type="radio" value="1" <?php loadSession('diag_urticaire','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_urticaire">
						<input name="diag_urticaire" type="radio" value="0" <?php loadSession('diag_urticaire','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_urticaire">
						<input name="trt_urticaire" type="radio" value="1" <?php loadSession('trt_urticaire','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_urticaire">
						<input name="trt_urticaire" type="radio" value="0" <?php loadSession('trt_urticaire','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Choc anaphylactique</strong></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_anaphylaxie">
						<input name="diag_anaphylaxie" type="radio" value="1" <?php loadSession('diag_anaphylaxie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_anaphylaxie">
						<input name="diag_anaphylaxie" type="radio" value="0" <?php loadSession('diag_anaphylaxie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_anaphylaxie">
						<input name="trt_anaphylaxie" type="radio" value="1" <?php loadSession('trt_anaphylaxie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_anaphylaxie">
						<input name="trt_anaphylaxie" type="radio" value="0" <?php loadSession('trt_anaphylaxie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Crise d'&eacute;pilepsie</strong> </td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_epilepsie">
						<input name="diag_epilepsie" type="radio" value="1" <?php loadSession('diag_epilepsie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_epilepsie">
						<input name="diag_epilepsie" type="radio" value="0" <?php loadSession('diag_epilepsie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_epilepsie">
						<input name="trt_epilepsie" type="radio" value="1" <?php loadSession('trt_epilepsie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_epilepsie">
						<input name="trt_epilepsie" type="radio" value="0" <?php loadSession('trt_epilepsie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
		<tr>
			<td><strong>Crise de t&eacute;tanie, spasmophilie</strong> </td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="diag_tetanie">
						<input name="diag_tetanie" type="radio" value="1" <?php loadSession('diag_tetanie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="diag_tetanie">
						<input name="diag_tetanie" type="radio" value="0" <?php loadSession('diag_tetanie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
			<td><div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default" for="trt_tetanie">
						<input name="trt_tetanie" type="radio" value="1" <?php loadSession('trt_tetanie','',1); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Oui</label>
					<label class="btn btn-default"  for="trt_tetanie">
						<input name="trt_tetanie" type="radio" value="0" <?php loadSession('trt_tetanie','',0); ?> required>
						<span class="glyphicon glyphicon-ok text-active"></span> Non</label>
				</div></td>
		</tr>
			</tbody>
		
	</table>
	<div class="text-center">
		<button id="popover" type="submit" name="prevForm" value="submit" class="btn btn-default btn-lg pull-left"data-container="body" data-toggle="popover" data-placement="top" data-content="Merci de r&eacute;pondre &agrave; toutes les questions..."><span class="glyphicon glyphicon-chevron-left"></span> Pr&eacute;c&eacute;dent</button>
		<button id="popover2" type="submit" name="nextForm" value="submit" class="btn btn-default btn-lg pull-right" data-container="body" data-toggle="popover" data-placement="top" data-content="Merci de r&eacute;pondre &agrave; toutes les questions...">Suivant <span class="glyphicon glyphicon-chevron-right"></span></button>
	</div>
	<input type="hidden" name="formPageResponce" value="3">
</form>