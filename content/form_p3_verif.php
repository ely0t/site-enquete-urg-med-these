<?php
$ERREUR='';
$ERREUR_LABEL=array();
//6
$_SESSION['form']['diag_angor']=(isset($_POST['diag_angor']) && (in_array($_POST['diag_angor'],array('0','1'))))? intval($_POST['diag_angor']) : '';
$_SESSION['form']['trt_angor']=(isset($_POST['trt_angor']) && (in_array($_POST['trt_angor'],array('0','1'))))? intval($_POST['trt_angor']) : '';
if(($_SESSION['form']['diag_angor']==='') || ($_SESSION['form']['trt_angor']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Angine de poitrine, Angor et Infarctus du myocarde".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_hypertension']=(isset($_POST['diag_hypertension']) && (in_array($_POST['diag_hypertension'],array('0','1'))))? intval($_POST['diag_hypertension']) : '';
$_SESSION['form']['trt_hypertension']=(isset($_POST['trt_hypertension']) && (in_array($_POST['trt_hypertension'],array('0','1'))))? intval($_POST['trt_hypertension']) : '';
if(($_SESSION['form']['diag_hypertension']==='') || ($_SESSION['form']['trt_hypertension']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Crise hypertensive".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_dissection']=(isset($_POST['diag_dissection']) && (in_array($_POST['diag_dissection'],array('0','1'))))? intval($_POST['diag_dissection']) : '';
$_SESSION['form']['trt_dissection']=(isset($_POST['trt_dissection']) && (in_array($_POST['trt_dissection'],array('0','1'))))? intval($_POST['trt_dissection']) : '';
if(($_SESSION['form']['diag_dissection']==='') || ($_SESSION['form']['trt_dissection']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Dissection aortique".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_arretcardiaque']=(isset($_POST['diag_arretcardiaque']) && (in_array($_POST['diag_arretcardiaque'],array('0','1'))))? intval($_POST['diag_arretcardiaque']) : '';
$_SESSION['form']['trt_arretcardiaque']=(isset($_POST['trt_arretcardiaque']) && (in_array($_POST['trt_arretcardiaque'],array('0','1'))))? intval($_POST['trt_arretcardiaque']) : '';
if(($_SESSION['form']['diag_arretcardiaque']==='') || ($_SESSION['form']['trt_arretcardiaque']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Arr&ecirc;t cardio-vasculaire".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_vagal']=(isset($_POST['diag_vagal']) && (in_array($_POST['diag_vagal'],array('0','1'))))? intval($_POST['diag_vagal']) : '';
$_SESSION['form']['trt_vagal']=(isset($_POST['trt_vagal']) && (in_array($_POST['trt_vagal'],array('0','1'))))? intval($_POST['trt_vagal']) : '';
if(($_SESSION['form']['diag_vagal']==='') || ($_SESSION['form']['trt_vagal']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Malaise vaso-vagal".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_hypoglycemie']=(isset($_POST['diag_hypoglycemie']) && (in_array($_POST['diag_hypoglycemie'],array('0','1'))))? intval($_POST['diag_hypoglycemie']) : '';
$_SESSION['form']['trt_hypoglycemie']=(isset($_POST['trt_hypoglycemie']) && (in_array($_POST['trt_hypoglycemie'],array('0','1'))))? intval($_POST['trt_hypoglycemie']) : '';
if(($_SESSION['form']['diag_hypoglycemie']==='') || ($_SESSION['form']['trt_hypoglycemie']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Malaise hypoglyc&eacute;mique".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_AVC']=(isset($_POST['diag_AVC']) && (in_array($_POST['diag_AVC'],array('0','1'))))? intval($_POST['diag_AVC']) : '';
$_SESSION['form']['trt_AVC']=(isset($_POST['trt_AVC']) && (in_array($_POST['trt_AVC'],array('0','1'))))? intval($_POST['trt_AVC']) : '';
if(($_SESSION['form']['diag_AVC']==='') || ($_SESSION['form']['trt_AVC']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Accident vasculaire c&eacute;r&eacute;bral".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_ISA']=(isset($_POST['diag_ISA']) && (in_array($_POST['diag_ISA'],array('0','1'))))? intval($_POST['diag_ISA']) : '';
$_SESSION['form']['trt_ISA']=(isset($_POST['trt_ISA']) && (in_array($_POST['trt_ISA'],array('0','1'))))? intval($_POST['trt_ISA']) : '';
if(($_SESSION['form']['diag_ISA']==='') || ($_SESSION['form']['trt_ISA']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Insuffisance surr&eacute;nalienne aigue".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_asthme']=(isset($_POST['diag_asthme']) && (in_array($_POST['diag_asthme'],array('0','1'))))? intval($_POST['diag_asthme']) : '';
$_SESSION['form']['trt_asthme']=(isset($_POST['trt_asthme']) && (in_array($_POST['trt_asthme'],array('0','1'))))? intval($_POST['trt_asthme']) : '';
if(($_SESSION['form']['diag_asthme']==='') || ($_SESSION['form']['trt_asthme']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Crise d\'asthme".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_inhalation']=(isset($_POST['diag_inhalation']) && (in_array($_POST['diag_inhalation'],array('0','1'))))? intval($_POST['diag_inhalation']) : '';
$_SESSION['form']['trt_inhalation']=(isset($_POST['trt_inhalation']) && (in_array($_POST['trt_inhalation'],array('0','1'))))? intval($_POST['trt_inhalation']) : '';
if(($_SESSION['form']['diag_inhalation']==='') || ($_SESSION['form']['trt_inhalation']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Accident d\'inhalation".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_quincke']=(isset($_POST['diag_quincke']) && (in_array($_POST['diag_quincke'],array('0','1'))))? intval($_POST['diag_quincke']) : '';
$_SESSION['form']['trt_quincke']=(isset($_POST['trt_quincke']) && (in_array($_POST['trt_quincke'],array('0','1'))))? intval($_POST['trt_quincke']) : '';
if(($_SESSION['form']['diag_quincke']==='') || ($_SESSION['form']['trt_quincke']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Oed&egrave;me de Quincke".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_OAP']=(isset($_POST['diag_OAP']) && (in_array($_POST['diag_OAP'],array('0','1'))))? intval($_POST['diag_OAP']) : '';
$_SESSION['form']['trt_OAP']=(isset($_POST['trt_OAP']) && (in_array($_POST['trt_OAP'],array('0','1'))))? intval($_POST['trt_OAP']) : '';
if(($_SESSION['form']['diag_OAP']==='') || ($_SESSION['form']['trt_OAP']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Oed&egrave;me aigu du poumon".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_embolie']=(isset($_POST['diag_embolie']) && (in_array($_POST['diag_embolie'],array('0','1'))))? intval($_POST['diag_embolie']) : '';
$_SESSION['form']['trt_embolie']=(isset($_POST['trt_embolie']) && (in_array($_POST['trt_embolie'],array('0','1'))))? intval($_POST['trt_embolie']) : '';
if(($_SESSION['form']['diag_embolie']==='') || ($_SESSION['form']['trt_embolie']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Embolie pulmonaire".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_anesthesie']=(isset($_POST['diag_anesthesie']) && (in_array($_POST['diag_anesthesie'],array('0','1'))))? intval($_POST['diag_anesthesie']) : '';
$_SESSION['form']['trt_anesthesie']=(isset($_POST['trt_anesthesie']) && (in_array($_POST['trt_anesthesie'],array('0','1'))))? intval($_POST['trt_anesthesie']) : '';
if(($_SESSION['form']['diag_anesthesie']==='') || ($_SESSION['form']['trt_anesthesie']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Intoxication due aux l\'anesth&eacute;siques".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_urticaire']=(isset($_POST['diag_urticaire']) && (in_array($_POST['diag_urticaire'],array('0','1'))))? intval($_POST['diag_urticaire']) : '';
$_SESSION['form']['trt_urticaire']=(isset($_POST['trt_urticaire']) && (in_array($_POST['trt_urticaire'],array('0','1'))))? intval($_POST['trt_urticaire']) : '';
if(($_SESSION['form']['diag_urticaire']==='') || ($_SESSION['form']['trt_urticaire']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Crise d\'urticaire".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_anaphylaxie']=(isset($_POST['diag_anaphylaxie']) && (in_array($_POST['diag_anaphylaxie'],array('0','1'))))? intval($_POST['diag_anaphylaxie']) : '';
$_SESSION['form']['trt_anaphylaxie']=(isset($_POST['trt_anaphylaxie']) && (in_array($_POST['trt_anaphylaxie'],array('0','1'))))? intval($_POST['trt_anaphylaxie']) : '';
if(($_SESSION['form']['diag_anaphylaxie']==='') || ($_SESSION['form']['trt_anaphylaxie']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Choc anaphylactique".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_epilepsie']=(isset($_POST['diag_epilepsie']) && (in_array($_POST['diag_epilepsie'],array('0','1'))))? intval($_POST['diag_epilepsie']) : '';
$_SESSION['form']['trt_epilepsie']=(isset($_POST['trt_epilepsie']) && (in_array($_POST['trt_epilepsie'],array('0','1'))))? intval($_POST['trt_epilepsie']) : '';
if(($_SESSION['form']['diag_epilepsie']==='') || ($_SESSION['form']['trt_epilepsie']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Crise d\'&eacute;pilepsie".</li>';
    $ERREUR_LABEL[]=6;
}
$_SESSION['form']['diag_tetanie']=(isset($_POST['diag_tetanie']) && (in_array($_POST['diag_tetanie'],array('0','1'))))? intval($_POST['diag_tetanie']) : '';
$_SESSION['form']['trt_tetanie']=(isset($_POST['trt_tetanie']) && (in_array($_POST['trt_tetanie'],array('0','1'))))? intval($_POST['trt_tetanie']) : '';
if(($_SESSION['form']['diag_tetanie']==='') || ($_SESSION['form']['trt_tetanie']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de l\'urgence : "Crise de t&eacute;tanie, spasmophilie".</li>';
    $ERREUR_LABEL[]=6;
}
?>