<?php
$ERREUR='';
$ERREUR_LABEL=array();
//7
$_SESSION['form']['formationUrgence']=(isset($_POST['formationUrgence']) && (in_array($_POST['formationUrgence'],array('0','1'))))? intval($_POST['formationUrgence']) : '';
if($_SESSION['form']['formationUrgence']===''){
    $ERREUR.='<li>Merci de bien s&eacute;lectionner "Oui" ou "Non" &agrave; la question 7</li>';
    $ERREUR_LABEL[]=7;
}
$_SESSION['form']['formationUrgenceAnnee']=(isset($_POST['formationUrgenceAnnee']) && (intval($_POST['formationUrgenceAnnee'])>=1914) && (intval($_POST['formationUrgenceAnnee'])<2015))? intval($_POST['formationUrgenceAnnee']): '';
if(($_SESSION['form']['formationUrgenceAnnee']==='') && ($_SESSION['form']['formationUrgence']==1)){
    $ERREUR.='<li>Merci de bien donner l\'ann&eacute;e de formation &agrave; la question 7</li>';
    $ERREUR_LABEL[]=7;
}
//8
$_SESSION['form']['freqFormationUrgence']=(isset($_POST['freqFormationUrgence']) && (in_array($_POST['freqFormationUrgence'],array('1','2','3','4','5','6'))))? intval($_POST['freqFormationUrgence']) : '';
if(($_SESSION['form']['freqFormationUrgence']==='') && ($_SESSION['form']['formationUrgence']==1)){
    $ERREUR.='<li>Merci de s&eacute;lectionner votre fr&eacute;quence de formation question 8.</li>';
    $ERREUR_LABEL[]=8;
}

//9 
$_SESSION['form']['video']      =(isset($_POST['video']))     ? $_POST['video']==true     : false;
$_SESSION['form']['livre']      =(isset($_POST['livre']))   ? $_POST['livre']==true  : false;
$_SESSION['form']['fiches']     =(isset($_POST['fiches']))      ? $_POST['fiches']==true     : false;
if(($_SESSION['form']['video'] || $_SESSION['form']['livre'] || $_SESSION['form']['fiches']) === false ){
    $ERREUR.='<li>Merci de s&eacute;lectionner au moins un des choix de la question 10.</li>';
    $ERREUR_LABEL[]=9;
}
?>