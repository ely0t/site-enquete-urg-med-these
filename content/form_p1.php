<?php 
if (!defined( 'FORMPAGE')){
    header( 'Location: ../index.php'); 
} 
/*******************************************************************************/ 
?>

<form method="post" action="index.php?page=form" role="form">
    <h3 class="font-thin">
        <span class="badge <?php errorLabel(1,$ERREUR_LABEL) ?>">1</span> En quelle ann&eacute;e avez-vous obtenu votre dipl&ocirc;me de Chirurgien Dentiste ?</h3>
    <select class="form-control" name="diplome">
<?php 
    for($i=2014;$i>1913;$i--){
        echo '<option '; 
        loadSession('diplome','',$i,true);
        echo '>'.$i.'</option>';
    }
?>
    </select>
    <h3 class="font-thin">
        <span class="badge <?php errorLabel(2,$ERREUR_LABEL) ?>">2</span> Au cours des 12 mois pr&eacute;c&eacute;dents combien de patients avez-vous suivis en moyenne par semaine ?</h3>
    <input class="form-control" name="nbpatients" type="number" min="0" value="<?php loadSession('nbpatients','0'); ?>" required>
    <h3 class="font-thin">
        <span class="badge <?php errorLabel(3,$ERREUR_LABEL) ?>">3</span> Avez-vous un exercice exclusif ou sp&eacute;cialis&eacute; ? <small> - un ou <em>plusieurs</em> choix possibles</small></h3>
    <div class="list-group">
        <label class="list-group-item">
            <input name="exercicePro_Omni" type="checkbox" <?php loadSession('exercicePro_Omni'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span><strong>Non - Omnipratique</strong></label>
        <label class="list-group-item">
            <input name="exercicePro_ChirBuc" type="checkbox" <?php loadSession('exercicePro_ChirBuc'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span> Chirurgie buccale</label>
        <label class="list-group-item">
            <input name="exercicePro_Paro" type="checkbox" <?php loadSession('exercicePro_Paro'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span> Parodontologie </label>
        <label class="list-group-item">
            <input name="exercicePro_Endo" type="checkbox" <?php loadSession('exercicePro_Endo'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span> Endodontie </label>
        <label class="list-group-item">
            <input name="exercicePro_Ortho" type="checkbox" <?php loadSession('exercicePro_Ortho'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span> Orthodontie </label>
        <label class="list-group-item">
            <input name="exercicePro_Hospi" type="checkbox" <?php loadSession('exercicePro_Hospi'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span> Pratique hospitali&egrave;re stricte</label>
        <label class="list-group-item">
            <input name="exercicePro_Autre" type="checkbox" <?php loadSession('exercicePro_Autre'); ?>>
            <span class="glyphicon glyphicon-ok text-active"></span> Autre </label>
        </div>
    <div class="text-center">
        <button type="submit" name="nextForm" class="btn btn-default btn-lg pull-right" value="submit">Suivant
            <span class="glyphicon glyphicon-chevron-right"></span>
        </button>
    </div>
    <input type="hidden" name="formPageResponce" value="1">
</form>