<?php
$ERREUR='';
$ERREUR_LABEL=array();
//1
$_SESSION['form']['diplome']=(isset($_POST['diplome']) && (intval($_POST['diplome'])>=1914) && (intval($_POST['diplome'])<2015))? intval($_POST['diplome']): '';
if($_SESSION['form']['diplome']===''){
    $ERREUR.='<li>Merci de bien r&eacute;pondre &agrave; la question 1.</li>';
    $ERREUR_LABEL[]=1;
}
//2
$_SESSION['form']['nbpatients']=(isset($_POST['nbpatients']) && (intval($_POST['nbpatients'])>0))? intval($_POST['nbpatients']) : '';
if($_SESSION['form']['nbpatients']===''){
    $ERREUR.='<li>Merci de donner un nombre entier sup&eacute;rieur &agrave; 0 pour la question 2.</li>';
    $ERREUR_LABEL[]=2;
}
//3
$_SESSION['form']['exercicePro_Omni']       =(isset($_POST['exercicePro_Omni']))    ? $_POST['exercicePro_Omni']==true     : false;
$_SESSION['form']['exercicePro_ChirBuc']    =(isset($_POST['exercicePro_ChirBuc'])) ? $_POST['exercicePro_ChirBuc']==true  : false;
$_SESSION['form']['exercicePro_Paro']       =(isset($_POST['exercicePro_Paro']))    ? $_POST['exercicePro_Paro']==true     : false;
$_SESSION['form']['exercicePro_Endo']       =(isset($_POST['exercicePro_Endo']))    ? $_POST['exercicePro_Endo']==true     : false;
$_SESSION['form']['exercicePro_Ortho']      =(isset($_POST['exercicePro_Ortho']))   ? $_POST['exercicePro_Ortho']==true    : false;
$_SESSION['form']['exercicePro_Hospi']      =(isset($_POST['exercicePro_Hospi']))   ? $_POST['exercicePro_Hospi']==true    : false;
$_SESSION['form']['exercicePro_Autre']      =(isset($_POST['exercicePro_Autre']))   ? $_POST['exercicePro_Autre']==true    : false;

if(($_SESSION['form']['exercicePro_Omni'] || $_SESSION['form']['exercicePro_ChirBuc'] || $_SESSION['form']['exercicePro_Paro'] || $_SESSION['form']['exercicePro_Endo'] || $_SESSION['form']['exercicePro_'] || $_SESSION['form']['exercicePro_Ortho'] || $_SESSION['form']['exercicePro_Hospi'] || $_SESSION['form']['exercicePro_Autre']) === false ){
    $ERREUR.='<li>Merci de s&eacute;lectionner au moins un des choix de la question 3.</li>';
    $ERREUR_LABEL[]=3;
}
?>