<?php
$ERREUR='';
$ERREUR_LABEL=array();
//4
$_SESSION['form']['nb_angor']=(isset($_POST['nb_angor']) && (intval($_POST['nb_angor'])>=0)) ? intval($_POST['nb_angor']) : '';
$_SESSION['form']['nb_infarctus']=(isset($_POST['nb_infarctus']) && (intval($_POST['nb_infarctus'])>=0)) ? intval($_POST['nb_infarctus']) : '';
$_SESSION['form']['nb_hypertension']=(isset($_POST['nb_hypertension']) && (intval($_POST['nb_hypertension'])>=0)) ? intval($_POST['nb_hypertension']) : '';
$_SESSION['form']['nb_dissection']=(isset($_POST['nb_dissection']) && (intval($_POST['nb_dissection'])>=0)) ? intval($_POST['nb_dissection']) : '';
$_SESSION['form']['nb_arretcardiaque']=(isset($_POST['nb_arretcardiaque']) && (intval($_POST['nb_arretcardiaque'])>=0)) ? intval($_POST['nb_arretcardiaque']) : '';
$_SESSION['form']['nb_cardiaque_autre']=(isset($_POST['nb_cardiaque_autre']) && (intval($_POST['nb_cardiaque_autre'])>=0)) ? intval($_POST['nb_cardiaque_autre']) : '';
$_SESSION['form']['nb_asthme']=(isset($_POST['nb_asthme']) && (intval($_POST['nb_asthme'])>=0)) ? intval($_POST['nb_asthme']) : '';
$_SESSION['form']['nb_inhalation']=(isset($_POST['nb_inhalation']) && (intval($_POST['nb_inhalation'])>=0)) ? intval($_POST['nb_inhalation']) : '';
$_SESSION['form']['nb_quincke']=(isset($_POST['nb_quincke']) && (intval($_POST['nb_quincke'])>=0)) ? intval($_POST['nb_quincke']) : '';
$_SESSION['form']['nb_OAP']=(isset($_POST['nb_OAP']) && (intval($_POST['nb_OAP'])>=0)) ? intval($_POST['nb_OAP']) : '';
$_SESSION['form']['nb_embolie']=(isset($_POST['nb_embolie']) && (intval($_POST['nb_embolie'])>=0)) ? intval($_POST['nb_embolie']) : '';
$_SESSION['form']['nb_resp_autre']=(isset($_POST['nb_resp_autre']) && (intval($_POST['nb_resp_autre'])>=0)) ? intval($_POST['nb_resp_autre']) : '';
$_SESSION['form']['nb_urticaire']=(isset($_POST['nb_urticaire']) && (intval($_POST['nb_urticaire'])>=0)) ? intval($_POST['nb_urticaire']) : '';
$_SESSION['form']['nb_anaphylaxie']=(isset($_POST['nb_anaphylaxie']) && (intval($_POST['nb_anaphylaxie'])>=0)) ? intval($_POST['nb_anaphylaxie']) : '';
$_SESSION['form']['nb_allergie_autre']=(isset($_POST['nb_allergie_autre']) && (intval($_POST['nb_allergie_autre'])>=0)) ? intval($_POST['nb_allergie_autre']) : '';
$_SESSION['form']['nb_epilepsie']=(isset($_POST['nb_epilepsie']) && (intval($_POST['nb_epilepsie'])>=0)) ? intval($_POST['nb_epilepsie']) : '';
$_SESSION['form']['nb_tetanie']=(isset($_POST['nb_tetanie']) && (intval($_POST['nb_tetanie'])>=0)) ? intval($_POST['nb_tetanie']) : '';
$_SESSION['form']['nb_convultion_autre']=(isset($_POST['nb_convultion_autre']) && (intval($_POST['nb_convultion_autre'])>=0)) ? intval($_POST['nb_convultion_autre']) : '';
$_SESSION['form']['nb_vagal']=(isset($_POST['nb_vagal']) && (intval($_POST['nb_vagal'])>=0)) ? intval($_POST['nb_vagal']) : '';
$_SESSION['form']['nb_hypoglycemie']=(isset($_POST['nb_hypoglycemie']) && (intval($_POST['nb_hypoglycemie'])>=0)) ? intval($_POST['nb_hypoglycemie']) : '';
$_SESSION['form']['nb_AVC']=(isset($_POST['nb_AVC']) && (intval($_POST['nb_AVC'])>=0)) ? intval($_POST['nb_AVC']) : '';
$_SESSION['form']['nb_coma']=(isset($_POST['nb_coma']) && (intval($_POST['nb_coma'])>=0)) ? intval($_POST['nb_coma']) : '';
$_SESSION['form']['nb_ISA']=(isset($_POST['nb_ISA']) && (intval($_POST['nb_ISA'])>=0)) ? intval($_POST['nb_ISA']) : '';
$_SESSION['form']['nb_anesthesie']=(isset($_POST['nb_anesthesie']) && (intval($_POST['nb_anesthesie'])>=0)) ? intval($_POST['nb_anesthesie']) : '';
$_SESSION['form']['nb_conscience_autre']=(isset($_POST['nb_conscience_autre']) && (intval($_POST['nb_conscience_autre'])>=0)) ? intval($_POST['nb_conscience_autre']) : '';

if(($_SESSION['form']['nb_angor']==='') || ($_SESSION['form']['nb_infarctus']==='') || ($_SESSION['form']['nb_hypertension']==='') || ($_SESSION['form']['nb_dissection']==='') || ($_SESSION['form']['nb_arretcardiaque']==='') || ($_SESSION['form']['nb_cardiaque_autre']==='') || ($_SESSION['form']['nb_asthme']==='') || ($_SESSION['form']['nb_inhalation']==='') || ($_SESSION['form']['nb_quincke']==='') || ($_SESSION['form']['nb_OAP']==='') || ($_SESSION['form']['nb_embolie']==='') || ($_SESSION['form']['nb_resp_autre']==='') || ($_SESSION['form']['nb_urticaire']==='') || ($_SESSION['form']['nb_anaphylaxie']==='') || ($_SESSION['form']['nb_allergie_autre']==='') || ($_SESSION['form']['nb_epilepsie']==='') || ($_SESSION['form']['nb_tetanie']==='') || ($_SESSION['form']['nb_convultion_autre']==='') || ($_SESSION['form']['nb_vagal']==='') || ($_SESSION['form']['nb_hypoglycemie']==='') || ($_SESSION['form']['nb_AVC']==='') || ($_SESSION['form']['nb_coma']==='') || ($_SESSION['form']['nb_ISA']==='') || ($_SESSION['form']['nb_anesthesie']==='') || ($_SESSION['form']['nb_conscience_autre'])===''){
    $ERREUR.='<li>Merci de donner un nombre entier sup&eacute;rieur ou &eacute;gal &agrave; 0 pour la question 4.</li>';
    $ERREUR_LABEL[]=4;
}
//5
$_SESSION['form']['nb_evacuations']=(isset($_POST['nb_evacuations']) && (intval($_POST['nb_evacuations'])>=0)) ? intval($_POST['nb_evacuations']) : '';
if($_SESSION['form']['nb_evacuations']===''){
    $ERREUR.='<li>Merci de donner un nombre entier sup&eacute;rieur ou &eacute;gal &agrave; 0 pour la question 5.</li>';
    $ERREUR_LABEL[]=5;
}
?>