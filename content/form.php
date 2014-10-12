<?php
if (!defined('THESE')){
	header('Location: ../index.php');
}
/******************************************************************************/
// Fonctions.
/*
 * 	Gestion de la couleur des puces s'il y a des erreurs. 
 */ 
function errorLabel($x,$ERREUR_LABEL)
{
    if(in_array($x,$ERREUR_LABEL)){ 
        echo ' red';
    }
}
/*
 * 	
 */ 
function loadSession($var, $intivar='', $condition='', $seclected=false){
    if(isset($_SESSION['form']) && isset($_SESSION['form'][$var])){
        if(($condition!=='') && ($_SESSION['form'][$var]!=='')){
            if($_SESSION['form'][$var]==$condition && $seclected==true){
                echo ' selected';
            }elseif($_SESSION['form'][$var]==$condition && $seclected==false){
                echo ' checked';
            }
        }
        elseif(is_bool($_SESSION['form'][$var]) && ($_SESSION['form'][$var]===true) ){ 
            echo ' checked';    
        }
        else{
            echo $_SESSION['form'][$var];
        }
    }
    else{
        echo $intivar;
    }
}
/*******************************************************************************/
// Configuration.
/*******************************************************************************/
//Constantes
define('FORMPAGE', true);
define('MAXPAGE',6);
//
session_start ();
/******************************************************************************/
//	Connection
/******************************************************************************/
$ui2d=(isset($_GET['token']) && preg_match("#^[0-9A-Z]{40}$#", strtoupper($_GET['token'])))? $_GET['token'] : '';
if(!isset($_SESSION['ui2d']) && $ui2d!=''){
    $_SESSION['ui2d']=$ui2d;
}
             
$user_connected=(isset($_SESSION['connected']))? $_SESSION['connected']===true : false;
//Vérification
if( isset($_GET['checkCLE'])&& ($user_connected==false)){
    $user_connected=true;
    $_SESSION['formPage']=1;
    $_SESSION['connected']=true;
}
if($user_connected==false){
	// On détruit les variables de notre session
 	session_unset ();   
	// On détruit notre session
	session_destroy ();
/******************************************************************************/
?>
    <section class="container">
        <div class="m-xl">
            <h2 class="font-thin"> Consentement libre et &eacute;clair&eacute;</h2>
            <div class="panel panel-success">
                <div class="panel-body">
                    <p><?php include(CONTENT.'CONSENTEMENT.php') ?></p>
                </div>
            </div>
        </div>
        <form method="get" action="index.php?page=form" role="form" class="text-center">
            <button type="submit" value="submit" name="checkCLE" class="btn btn-success btn-lg">J'accepte le consentement libre et &eacute;clair&eacute; <span class="glyphicon glyphicon-chevron-right"></span></button>
            <input type="hidden" name="page" value="form">
            <input type="hidden" name="token" value="<?php echo $ui2d ?>">
        </form>
<?php
}else{
// Fin de la connection
/******************************************************************************/
//	Questionnaires
/******************************************************************************/
//Stocke la liste '<li>' des erreurs
    $ERREUR='';
    $ERREUR_LABEL=array();
    $formVerifFile='';
//Enregistrement des réponses dans $_SESSION
//Détermination  de la page en fonction de $_POST['formPageResponce']
    if (isset($_POST['formPageResponce'])){
        switch ($_POST['formPageResponce']) {
            case 1:
                $formVerifFile='form_p1_verif';
                break;
            case 2:
                $formVerifFile='form_p2_verif';
                break;
            case 3:
                $formVerifFile='form_p3_verif';
                break;
            case 4:
                $formVerifFile='form_p4_verif';
                break;
            case 5:
                $formVerifFile='form_p5_verif';
                break;
            case 6:
                $formVerifFile='form_p6_verif';
                break;
        }
        if(is_file(CONTENT.$formVerifFile.'.php')){
		  include(CONTENT.$formVerifFile.'.php');
	   }else{
            include(CONTENT.'Erreur404.php');
       }
    }   
  
//Debug
if(debug_mode){
	echo'<br/><br/><div class="panel panel-success"><div class="panel-heading"><strong>DEBUG - $_GET / $_POST / $_SESSION / $user_connected</strong></div><div class="panel-body">';
	d($_GET);
	d($_POST);
	d($_SESSION);
	d($user_connected);
    d($formVerifFile);
	echo'</div></div>';
}
//Fin du questionnaire
if(($ERREUR=='') && ($formVerifFile=='form_p6_verif')){
    // On détruit les variables de notre session
 	session_unset ();   
	// On détruit notre session
	session_destroy ();
    include(CONTENT.'home.php');
}else{
    
//Controle de la page à afficher
if($ERREUR==''){
    if(isset($_POST['nextForm'])){
        $_SESSION['formPage']=(isset($_SESSION['formPage'])) ? intval($_SESSION['formPage'])+1: 1;
    }elseif(isset($_POST['prevForm']) || isset($_POST['prevForm'])){
        $_SESSION['formPage']=(isset($_SESSION['formPage'])) ? intval($_SESSION['formPage'])-1: 1;
    }
    if($_SESSION['formPage']>MAXPAGE){
        $_SESSION['formPage']=MAXPAGE;	
    }elseif($_SESSION['formPage']<1){
        $_SESSION['formPage']=1;	
    }
}
//Calcul de la progression
$progressValue=($_SESSION['formPage']/(MAXPAGE))*100;
/******************************************************************************/
?>	
<section class="container">
	<div class="m-xl">
		<h2 class="font-thin"> Questionnaire </h2>
		<h5>&bull; Progression actuelle dans le questionnaire : <strong><?php echo $_SESSION['formPage'] ?>/<?php echo MAXPAGE ?></strong></h5>
		<div class="progress progress-striped">
			<div class="progress-bar progress-bar" role="progressbar" aria-valuenow="<?php echo $progressValue ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progressValue ?>%"> <span class="sr-only"><?php echo $progressValue ?>% Complete</span> </div>
		</div>
<?php 
    if($ERREUR<>''){
        echo'<div class="alert alert-danger">';
        echo'<h4>Oups ! il semble y avoir un probl&egrave;me ...</h4>';
        echo'<ul>';
        echo $ERREUR;
        echo'</ul>';    
        echo'</div>';
    }
?>
	</div>
	<hr/>
<?php
        switch ($_SESSION['formPage']) {
            case 1:
                $formfile='form_p1';
                if(!isset($_SESSION['Ttime'])){
                    $_SESSION['Ttime']=time();           
                }
                break;
            case 2:
                $formfile='form_p2';
                break;
            case 3:
                $formfile='form_p3';
                break;
            case 4:
                $formfile='form_p4';
                break;
            case 5:
                $formfile='form_p5';
                break;
            case 6:
                $formfile='form_p6';
                break;
        }
        if(is_file(CONTENT.$formfile.'.php')){
            include(CONTENT.$formfile.'.php');
        }else{
            //Erreur : fichier introuvable
            include(CONTENT.'Erreur404.php');
        }
    }
}
?>
</section>