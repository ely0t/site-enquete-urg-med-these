<?php
if (!defined('FORMPAGE')){
	header('Location: ../index.php');
}
/*******************************************************************************/
?>
<form method="post" action="index.php?page=form" role="form">
	<h3 class="font-thin">
        <span class="badge <?php errorLabel(4,$ERREUR_LABEL) ?>">4</span> Merci de d&eacute;nombrer les diff&eacute;rentes situations d'urgence m&eacute;dicale auxquelles vous avez &eacute;t&eacute; confront&eacute;s ces 12 derniers mois.</h3>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="list-group">
                        <span class="list-group-item active"><strong>Urgences cardiovasculaires</strong></span>
                        <label class="list-group-item"> Angine de poitrine, Angor <input class="pull-right" name="nb_angor" type="number" min="0" value="<?php loadSession('nb_angor','0'); ?>" required></label>
                        <label class="list-group-item"> Infarctus du myocarde <input class="pull-right" name="nb_infarctus" type="number" min="0" value="<?php loadSession('nb_infarctus','0'); ?>" required></label>
                        <label class="list-group-item"> Crise hypertensive <input class="pull-right" name="nb_hypertension" type="number" min="0" value="<?php loadSession('nb_hypertension','0'); ?>" required></label>
                        <label class="list-group-item"> Dissection aortique <input  class="pull-right" name="nb_dissection" type="number" min="0" value="<?php loadSession('nb_dissection','0'); ?>" required></label>
                        <label class="list-group-item"> Arr&ecirc;t cardio-vasculaire <input  class="pull-right" name="nb_arretcardiaque" type="number" min="0"  value="<?php loadSession('nb_arretcardiaque','0'); ?>"required></label>
                        <label class="list-group-item"> Non &eacute;tiquet&eacute;e<input class="pull-right" name="nb_cardiaque_autre" type="number" min="0"  value="<?php loadSession('nb_cardiaque_autre','0'); ?>"required></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-group">
                        <span class="list-group-item active"><strong>Urgences respiratoires</strong></span>
                        <label class="list-group-item"> Crise d'asthme <input class="pull-right" name="nb_asthme" type="number" min="0"  value="<?php loadSession('nb_asthme','0'); ?>"required></label>
                        <label class="list-group-item"> Accident d'inhalation <input class="pull-right" name="nb_inhalation" type="number" min="0" value="<?php loadSession('nb_inhalation','0'); ?>" required> </label>
                        <label class="list-group-item"> Oed&egrave;me de Quincke <input class="pull-right" name="nb_quincke" type="number" min="0" value="<?php loadSession('nb_quincke','0'); ?>" required></label>
                        <label class="list-group-item"> Oed&egrave;me aig&uuml; du poumon <input class="pull-right" name="nb_OAP" type="number" min="0" value="<?php loadSession('nb_OAP','0'); ?>" required></label>
                        <label class="list-group-item"> Embolie pulmonaire <input class="pull-right" name="nb_embolie" type="number" min="0" value="<?php loadSession('nb_embolie','0'); ?>" required></label>
                        <label class="list-group-item"> Non &eacute;tiquet&eacute;e <input class="pull-right" name="nb_resp_autre" type="number" min="0" value="<?php loadSession('nb_resp_autre','0'); ?>" required></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-group">
                        <span class="list-group-item active"><strong>Urgences allergiques</strong></span>
                        <label class="list-group-item"> Crise d'urticaire <input class="pull-right" name="nb_urticaire" type="number" min="0" value="<?php loadSession('nb_urticaire','0'); ?>" required></label>
                        <label class="list-group-item"> Choc anaphylactique <input class="pull-right"  name="nb_anaphylaxie" type="number" min="0" value="<?php loadSession('nb_anaphylaxie','0'); ?>" required></label>
                        <span class="list-group-item"><em>Oed&egrave;me de Quincke  : voir le panel urgences respiratoires</em></span>
                        <label class="list-group-item"> Non &eacute;tiquet&eacute;e <input class="pull-right" name="nb_allergie_autre" type="number" min="0" value="<?php loadSession('nb_allergie_autre','0'); ?>" required></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-group">
                        <span class="list-group-item active"><strong>Crises convulsives</strong></span>
                        <label class="list-group-item"> Crise d'epilepsie <input class="pull-right" name="nb_epilepsie" type="number" min="0" value="<?php loadSession('nb_epilepsie','0'); ?>" required></label>
                        <label class="list-group-item"> Crise de t&eacute;tanie, spasmophilie <input class="pull-right" name="nb_tetanie" type="number" min="0" value="<?php loadSession('nb_tetanie','0'); ?>" required></label>
                        <label class="list-group-item">  Non &eacute;tiquet&eacute;e <input class="pull-right" name="nb_convultion_autre" type="number" min="0" value="<?php loadSession('nb_convultion_autre','0'); ?>" required></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <span class="list-group-item active"><strong>Troubles de la conscience et pertes de connaissance</strong></span>
                <label class="list-group-item"> Malaise vaso-vagal <input class="pull-right" name="nb_vagal" type="number" min="0" value="<?php loadSession('nb_vagal','0'); ?>" required></label>
                <label class="list-group-item"> Malaise hypoglyc&eacute;mique <input class="pull-right" name="nb_hypoglycemie" type="number" min="0" value="<?php loadSession('nb_hypoglycemie','0'); ?>" required></label>
                <label class="list-group-item"> Accident vasculaire c&eacute;r&eacute;bral <input class="pull-right" name="nb_AVC" type="number" min="0" value="<?php loadSession('nb_AVC','0'); ?>" required></label>
                <label class="list-group-item"> Coma <input class="pull-right" name="nb_coma" type="number" min="0" value="<?php loadSession('nb_coma','0'); ?>" required></label>
                <label class="list-group-item"> Insuffisance surr&eacute;nalienne aigue <input class="pull-right" name="nb_ISA" type="number" min="0" value="<?php loadSession('nb_ISA','0'); ?>" required></label>
                <label class="list-group-item"> Intoxication due aux anesth&eacute;siques <input class="pull-right" name="nb_anesthesie" type="number" min="0" value="<?php loadSession('nb_anesthesie','0'); ?>" required></label>
                <label class="list-group-item"> Non &eacute;tiquet&eacute;e <input class="pull-right" name="nb_conscience_autre" type="number" min="0" value="<?php loadSession('nb_conscience_autre','0'); ?>" required></label>
            </div>
        </div>
    </div>	
    <h3 class="font-thin">
        <span class="badge <?php errorLabel(5,$ERREUR_LABEL) ?>">5</span> Au cours de votre carri&egrave;re combien de fois avez-vous fait appel &agrave;  un service d'&eacute;vacuation m&eacute;dicalis&eacute;e ? </h3>
    <input class="form-control" name="nb_evacuations" type="number" min="0" value="<?php loadSession('nb_evacuations','0'); ?>" required>
    <br/><br/>
	<div class="text-center">
		<button type="submit" name="prevForm" value="submit" class="btn btn-default btn-lg pull-left"><span class="glyphicon glyphicon-chevron-left"></span> Pr&eacute;c&eacute;dent</button>
		<button type="submit" name="nextForm" value="submit" class="btn btn-default btn-lg pull-right">Suivant <span class="glyphicon glyphicon-chevron-right"></span></button>
	</div>
    <input type="hidden" name="formPageResponce" value="2">
</form>