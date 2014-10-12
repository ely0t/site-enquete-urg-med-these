<?php
$ERREUR='';
$ERREUR_LABEL=array();
//10
$_SESSION['form']['prst_oxygene']=(isset($_POST['prst_oxygene']) && (in_array($_POST['prst_oxygene'],array('0','1'))))? intval($_POST['prst_oxygene']) : '';
$_SESSION['form']['utl_oxygene']=(isset($_POST['utl_oxygene']) && (in_array($_POST['utl_oxygene'],array('0','1'))))? intval($_POST['utl_oxygene']) : '';
if(($_SESSION['form']['prst_oxygene']==='') || ($_SESSION['form']['utl_oxygene']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Une source d\'oxyg&egrave;ne".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_DSA']=(isset($_POST['prst_DSA']) && (in_array($_POST['prst_DSA'],array('0','1'))))? intval($_POST['prst_DSA']) : '';
$_SESSION['form']['utl_DSA']=(isset($_POST['utl_DSA']) && (in_array($_POST['utl_DSA'],array('0','1'))))? intval($_POST['utl_DSA']) : '';
if(($_SESSION['form']['prst_DSA']==='') || ($_SESSION['form']['utl_DSA']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Un d&eacute;fibrillateur (semi)automatique".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_tensiometre']=(isset($_POST['prst_tensiometre']) && (in_array($_POST['prst_tensiometre'],array('0','1'))))? intval($_POST['prst_tensiometre']) : '';
$_SESSION['form']['utl_tensiometre']=(isset($_POST['utl_tensiometre']) && (in_array($_POST['utl_tensiometre'],array('0','1'))))? intval($_POST['utl_tensiometre']) : '';
if(($_SESSION['form']['prst_tensiometre']==='') || ($_SESSION['form']['utl_tensiometre']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Un tensiom&egrave;tre".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_BAVU']=(isset($_POST['prst_BAVU']) && (in_array($_POST['prst_BAVU'],array('0','1'))))? intval($_POST['prst_BAVU']) : '';
$_SESSION['form']['utl_BAVU']=(isset($_POST['utl_BAVU']) && (in_array($_POST['utl_BAVU'],array('0','1'))))? intval($_POST['utl_BAVU']) : '';
if(($_SESSION['form']['prst_BAVU']==='') || ($_SESSION['form']['utl_BAVU']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Ballon autoremplisseur &agrave; valve unidirectionnelle".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_canule']=(isset($_POST['prst_canule']) && (in_array($_POST['prst_canule'],array('0','1'))))? intval($_POST['prst_canule']) : '';
$_SESSION['form']['utl_canule']=(isset($_POST['utl_canule']) && (in_array($_POST['utl_canule'],array('0','1'))))? intval($_POST['utl_canule']) : '';
if(($_SESSION['form']['prst_canule']==='') || ($_SESSION['form']['utl_canule']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Canule de Guedel".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_IM']=(isset($_POST['prst_IM']) && (in_array($_POST['prst_IM'],array('0','1'))))? intval($_POST['prst_IM']) : '';
$_SESSION['form']['utl_IM']=(isset($_POST['utl_IM']) && (in_array($_POST['utl_IM'],array('0','1'))))? intval($_POST['utl_IM']) : '';
if(($_SESSION['form']['prst_IM']==='') || ($_SESSION['form']['utl_IM']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Mat&eacute;riel d\'injection sous cutan&eacute; et/ou intramusculaire".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_IV']=(isset($_POST['prst_IV']) && (in_array($_POST['prst_IV'],array('0','1'))))? intval($_POST['prst_IV']) : '';
$_SESSION['form']['utl_IV']=(isset($_POST['utl_IV']) && (in_array($_POST['utl_IV'],array('0','1'))))? intval($_POST['utl_IV']) : '';
if(($_SESSION['form']['prst_IV']==='') || ($_SESSION['form']['utl_IV']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Mat&eacute;riel d\'injection intravalculaire".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_adrenaline']=(isset($_POST['prst_adrenaline']) && (in_array($_POST['prst_adrenaline'],array('0','1'))))? intval($_POST['prst_adrenaline']) : '';
$_SESSION['form']['utl_adrenaline']=(isset($_POST['utl_adrenaline']) && (in_array($_POST['utl_adrenaline'],array('0','1'))))? intval($_POST['utl_adrenaline']) : '';
if(($_SESSION['form']['prst_adrenaline']==='') || ($_SESSION['form']['utl_adrenaline']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "De l\'adr&eacute;naline / &eacute;pin&eacute;phrine".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_trinitrine']=(isset($_POST['prst_trinitrine']) && (in_array($_POST['prst_trinitrine'],array('0','1'))))? intval($_POST['prst_trinitrine']) : '';
$_SESSION['form']['utl_trinitrine']=(isset($_POST['utl_trinitrine']) && (in_array($_POST['utl_trinitrine'],array('0','1'))))? intval($_POST['utl_trinitrine']) : '';
if(($_SESSION['form']['prst_trinitrine']==='') || ($_SESSION['form']['utl_trinitrine']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "De la trinitrine".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_glucagon']=(isset($_POST['prst_glucagon']) && (in_array($_POST['prst_glucagon'],array('0','1'))))? intval($_POST['prst_glucagon']) : '';
$_SESSION['form']['utl_glucagon']=(isset($_POST['utl_glucagon']) && (in_array($_POST['utl_glucagon'],array('0','1'))))? intval($_POST['utl_glucagon']) : '';
if(($_SESSION['form']['prst_glucagon']==='') || ($_SESSION['form']['utl_glucagon']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Du glucagon".</li>';
    $ERREUR_LABEL[]=10;
}
$_SESSION['form']['prst_salbutamol']=(isset($_POST['prst_salbutamol']) && (in_array($_POST['prst_salbutamol'],array('0','1'))))? intval($_POST['prst_salbutamol']) : '';
$_SESSION['form']['utl_salbutamol']=(isset($_POST['utl_salbutamol']) && (in_array($_POST['utl_salbutamol'],array('0','1'))))? intval($_POST['utl_salbutamol']) : '';
if(($_SESSION['form']['prst_salbutamol']==='') || ($_SESSION['form']['utl_salbutamol']==='')){
    $ERREUR.='<li>Merci de bien r&eacute;pondre aux questions au niveau de : "Du salbutamol".</li>';
    $ERREUR_LABEL[]=10;
}
//#####################################################################//
//Envoi des résultats à la base de données !
//#####################################################################//
if(isset($_POST['nextForm']) && ($ERREUR=='') ){
    
    //Pour créer la base de données la premiere fois
    //include(CONTENT.'BDDMAKER.php');
    
    $bdd = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    
    //
    if(isset($_SESSION['Ttime'])){
        $_SESSION['Ttime']=ceil((time()-$_SESSION['Ttime'])/60);
        $_SESSION['form']['Ttime']=$_SESSION['Ttime'];
    }else{
        $_SESSION['form']['Ttime']=0;
    }
    //
    $sql_field='';
    $sql_value='';
    foreach($_SESSION['form'] as $key => $value){
        $sql_field.=$key.', '; 
        $sql_value.=':'.$key.', ';
    }
    $sql_field=substr($sql_field,0,-2);
    $sql_value=substr($sql_value,0,-2);
    //Enregistrement des resultats
    $req = $bdd->prepare('INSERT INTO urgencemed ('.$sql_field.') VALUES('.$sql_value.')');
    $retrn=$req->execute($_SESSION['form']);
    $req->closeCursor();
    
    //ssi ui2d "burn" de lastcontact
    if(isset($_SESSION['ui2d']) && preg_match("#^[0-9A-Z]{40}$#", strtoupper($_SESSION['ui2d']))){
        $req = $bdd->prepare('UPDATE contacts SET lastcontact=:lastcontact, share=share+1 WHERE ui2d=:ui2d');
        $retrn=$req->execute(array(
            'ui2d'=>$_SESSION['ui2d'],
            'lastcontact'=>'9999-12-31'
        ));
    }
    
    //Si erreur d'enregistrement
    if($retrn==false){
        $ERREUR.='<li>Un probl&egrave;me a &eacute;t&eacute; rencontr&eacute; lors de la tentative d\'enregistrement des r&eacute;sultats. Merci de re-appuyer sur "Suivant" ou de contacter '.SITEMAIL.'. si le probl&egrave;me persiste.</li>';
        //Envoi d'un mail
        $headers ='From: "UrgenceMedOdonto"<contact@urgencemedodonto.fr>'."\n"; 
        $headers .='Reply-To: contact@urgencemedodonto.fr'."\n"; 
        $headers .='Content-Type: text/plain; charset="utf-8"'."\n"; 
        $headers .='Content-Transfer-Encoding: 8bit';
        mail('ballester.benoit@hotmail.fr', 'Erreur enregistrement BDD', 'Erreur enregistrement BDD', $headers); 
        //Enregistrement d'un fichier de la seesion serialisé avec le timestamp
        $rescue_file = fopen("./tmpfiles/".time().".txt","w");
        fseek($rescue_file, 0);
        fputs($rescue_file, serialize($_SESSION['form']));
        fclose($rescue_file);
    }
}
?>