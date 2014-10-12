<?php
if (!defined('THESE')){
	header('Location: ../index.php');
}
/******************************************************************************/
// Récupération des données
/******************************************************************************/
$PARAM_hote='***';              // serveur
$PARAM_nom_bd='***';            // base de données
$PARAM_utilisateur='***';       // nom d'utilisateur
$PARAM_mot_passe='***';         // mot de passe

//Récupération de toute la base de données "résultats"
$bdd = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
$req = $bdd->prepare('SELECT * FROM urgencemed');
$retrn=$req->execute(array());
$donnees=$req->fetchAll(PDO::FETCH_ASSOC);

//Récupération de toute la base de données "contact"
$req = $bdd->prepare('SELECT * FROM contacts');
$retrn=$req->execute(array());
$donnees_contacts=$req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

//
$nbparticipants=count($donnees);
echo '$nbparticipants='.$nbparticipants.'<br/>';
//!! au mail en echec
$nbcontacts=count($donnees_contacts);

/******************************************************************************/
// Initialisation des variables 
/******************************************************************************/
$nbparticipants2=0;
$repdiplone=array();
$Tnb_AnneeExp=0;
$M_AnneeExp=0;
$Var_AnneeExp=0;
$TnbPatients=0;
$TTemp=0;

$exercicePro_Omni=0;
$exercicePro_ChirBuc=0;
$exercicePro_Paro=0;
$exercicePro_Endo=0;
$exercicePro_Ortho=0;
$exercicePro_Hospi=0;
$exercicePro_Autre=0;

//
$Tnb_angor=0;
$Tnb_infarctus=0;
$Tnb_hypertension=0;
$Tnb_dissection=0;
$Tnb_arretcardiaque=0;
$Tnb_cardiaque_autre=0;
$Tnb_asthme=0;
$Tnb_inhalation=0;
$Tnb_quincke=0;
$Tnb_OAP=0;
$Tnb_embolie=0;
$Tnb_resp_autre=0;
$Tnb_urticaire=0;
$Tnb_anaphylaxie=0;
$Tnb_allergie_autre=0;
$Tnb_epilepsie=0;
$Tnb_tetanie=0;
$Tnb_convultion_autre=0;
$Tnb_vagal=0;
$Tnb_hypoglycemie=0;
$Tnb_AVC=0;
$Tnb_coma=0;
$Tnb_ISA=0;
$Tnb_anesthesie=0;
$Tnb_conscience_autre=0;

$nbUrgPerDoctor=array();

$Tnb_evacuations=0;
$Var_Evacuations=0;
//
$Tdiag_angor=0;
$Ttrt_angor=0;
$Tdiag_hypertension=0;
$Ttrt_hypertension=0;
$Tdiag_dissection=0;
$Ttrt_dissection=0;
$Tdiag_arretcardiaque=0;
$Ttrt_arretcardiaque=0;
$Tdiag_vagal=0;
$Ttrt_vagal=0;
$Tdiag_hypoglycemie=0;
$Ttrt_hypoglycemie=0;
$Tdiag_AVC=0;
$Ttrt_AVC=0;
$Tdiag_ISA=0;
$Ttrt_ISA=0;
$Tdiag_asthme=0;
$Ttrt_asthme=0;
$Tdiag_inhalation=0;
$Ttrt_inhalation=0;
$Tdiag_quincke=0;
$Ttrt_quincke=0;
$Tdiag_OAP=0;
$Ttrt_OAP=0;
$Tdiag_embolie=0;
$Ttrt_embolie=0;
$Tdiag_anesthesie=0;
$Ttrt_anesthesie=0;
$Tdiag_urticaire=0;
$Ttrt_urticaire=0;
$Tdiag_anaphylaxie=0;
$Ttrt_anaphylaxie=0;
$Tdiag_epilepsie=0;
$Ttrt_epilepsie=0;
$Tdiag_tetanie=0;
$Ttrt_tetanie=0;

$expDiagPerDoctor=array();
$expTrtPerDoctor=array();

//
$formation=0;
$formationInit=0;
$freqformation=array();
$supFormation=array();

//
$Tprst_oxygene=0;
$Tutl_oxygene=0;
$Tprst_DSA=0;
$Tutl_DSA=0;
$Tprst_tensiometre=0;
$Tutl_tensiometre=0;
$Tprst_BAVU=0;
$Tutl_BAVU=0;
$Tprst_canule=0;
$Tutl_canule=0;
$Tprst_IM=0;
$Tutl_IM=0;
$Tprst_IV=0;
$Tutl_IV=0;
$Tprst_adrenaline=0;
$Tutl_adrenaline=0;
$Tprst_trinitrine=0;
$Tutl_trinitrine=0;
$Tprst_glucagon=0;
$Tutl_glucagon=0;
$Tprst_salbutamol=0;
$Tutl_salbutamol=0;
$expUtlPerDoctor=array();
$expPrstPerDoctor=array();

//
$statsPlusDiplome=array(array());
$statsPlusFormation=array(array());
/******************************************************************************/
// Boucle principale d'extraction des données 
/******************************************************************************/
foreach($donnees as $key => $val){
    /*
    PAGE 1
    */
	//!!
    if($val['exercicePro_Omni']!=0){
        $exercicePro_Omni+=$val['exercicePro_Omni'];
    }elseif($val['exercicePro_Ortho']!=0){
        $exercicePro_Ortho+=$val['exercicePro_Ortho']; 
    }elseif($val['exercicePro_Hospi']!=0){
        $exercicePro_Hospi+=$val['exercicePro_Hospi']; 
    }else{
        $div_adjust=$val['exercicePro_ChirBuc']+$val['exercicePro_Paro']+$val['exercicePro_Endo']+$val['exercicePro_Autre'];
        if($div_adjust>1){
            $val['exercicePro_ChirBuc']/=$div_adjust;
            $val['exercicePro_Paro']/=$div_adjust;
            $val['exercicePro_Endo']/=$div_adjust;
            $val['exercicePro_Autre']/=$div_adjust;
        }
        //
        $exercicePro_ChirBuc+=$val['exercicePro_ChirBuc'];
        $exercicePro_Paro+=$val['exercicePro_Paro'];
        $exercicePro_Endo+=$val['exercicePro_Endo'];
        $exercicePro_Autre+=$val['exercicePro_Autre'];
    }
    
    $nbparticipants2++;
    
    //CRITERES D'EXCLUSION
    if(($val['exercicePro_Ortho']!=0) || ($val['exercicePro_Hospi']!=0) || ($val['diplome']==2014)){
		//Nombre de participants total MOINS les exclus
    	$nbparticipants-=1;
        continue;    
    }
      
    $nbparticipants3++;
    
    //Dénombre les années de diplome
    $repdiplone[$val['diplome']]++;
    //Total d'année de pratique
    $Tnb_AnneeExp+=2014-$val['diplome'];
	
	//Total du nombre de patients vu par l'ensemble des praticiens
    $TnbPatients+=$val['nbpatients'];
	//Pour le calcul du temps moyen de réponse
    $TTemp+=$val['Ttime'];

    /*
    PAGE 2
    */
	//
    $Tnb_angor+=$val['nb_angor'];
    $Tnb_infarctus+=$val['nb_infarctus'];
    $Tnb_hypertension+=$val['nb_hypertension'];
    $Tnb_dissection+=$val['nb_dissection'];
    $Tnb_arretcardiaque+=$val['nb_arretcardiaque'];
    $Tnb_cardiaque_autre+=$val['nb_cardiaque_autre'];
    $Tnb_asthme+=$val['nb_asthme'];
    $Tnb_inhalation+=$val['nb_inhalation'];
    $Tnb_quincke+=$val['nb_quincke'];
    $Tnb_OAP+=$val['nb_OAP'];
    $Tnb_embolie+=$val['nb_embolie'];
    $Tnb_resp_autre+=$val['nb_resp_autre'];
    $Tnb_urticaire+=$val['nb_urticaire'];
    $Tnb_anaphylaxie+=$val['nb_anaphylaxie'];
    $Tnb_allergie_autre+=$val['nb_allergie_autre'];
    $Tnb_epilepsie+=$val['nb_epilepsie'];
    $Tnb_tetanie+=$val['nb_tetanie'];
    $Tnb_convultion_autre+=$val['nb_convultion_autre'];
    $Tnb_vagal+=$val['nb_vagal'];
    $Tnb_hypoglycemie+=$val['nb_hypoglycemie'];
    $Tnb_AVC+=$val['nb_AVC'];
    $Tnb_coma+=$val['nb_coma'];
    $Tnb_ISA+=$val['nb_ISA'];
    $Tnb_anesthesie+=$val['nb_anesthesie'];
    $Tnb_conscience_autre+=$val['nb_conscience_autre'];
    
    //Nombre de dentistes concernés
//    $Tnb_angor+=(!empty($val['nb_angor']) ? 1 : 0);
//    $Tnb_infarctus+=(!empty($val['nb_infarctus']) ? 1 :0);
//    $Tnb_hypertension+=(!empty($val['nb_hypertension']) ? 1 :0);
//    $Tnb_dissection+=(!empty($val['nb_dissection']) ? 1 :0);
//    $Tnb_arretcardiaque+=(!empty($val['nb_arretcardiaque']) ? 1 :0);
//    $Tnb_cardiaque_autre+=(!empty($val['nb_cardiaque_autre']) ? 1 :0);
//    $Tnb_asthme+=(!empty($val['nb_asthme']) ? 1 :0);
//    $Tnb_inhalation+=(!empty($val['nb_inhalation']) ? 1 :0);
//    $Tnb_quincke+=(!empty($val['nb_quincke']) ? 1 :0);
//    $Tnb_OAP+=(!empty($val['nb_OAP']) ? 1 :0);
//    $Tnb_embolie+=(!empty($val['nb_embolie']) ? 1 :0);
//    $Tnb_resp_autre+=(!empty($val['nb_resp_autre']) ? 1 :0);
//    $Tnb_urticaire+=(!empty($val['nb_urticaire']) ? 1 :0);
//    $Tnb_anaphylaxie+=(!empty($val['nb_anaphylaxie']) ? 1 :0);
//    $Tnb_allergie_autre+=(!empty($val['nb_allergie_autre']) ? 1 :0);
//    $Tnb_epilepsie+=(!empty($val['nb_epilepsie']) ? 1 :0);
//    $Tnb_tetanie+=(!empty($val['nb_tetanie']) ? 1 :0);
//    $Tnb_convultion_autre+=(!empty($val['nb_convultion_autre']) ? 1 :0);
//    $Tnb_vagal+=(!empty($val['nb_vagal']) ? 1 :0);
//    $Tnb_hypoglycemie+=(!empty($val['nb_hypoglycemie']) ? 1 :0);
//    $Tnb_AVC+=(!empty($val['nb_AVC']) ? 1 :0);
//    $Tnb_coma+=(!empty($val['nb_coma']) ? 1 :0);
//    $Tnb_ISA+=(!empty($val['nb_ISA']) ? 1 :0);
//    $Tnb_anesthesie+=(!empty($val['nb_anesthesie']) ? 1 :0);
//    $Tnb_conscience_autre+=(!empty($val['nb_conscience_autre']) ? 1 :0);
	
	// Dénombre le nombre d'urgences par praticien
    $nbTotalInRow=$val['nb_angor']+$val['nb_infarctus']+$val['nb_hypertension']+$val['nb_dissection']+$val['nb_arretcardiaque']+$val['nb_cardiaque_autre']+$val['nb_asthme']+$val['nb_inhalation']+$val['nb_quincke']+$val['nb_OAP']+$val['nb_embolie']+$val['nb_resp_autre']+$val['nb_urticaire']+$val['nb_anaphylaxie']+$val['nb_allergie_autre']+$val['nb_epilepsie']+$val['nb_tetanie']+$val['nb_convultion_autre']+$val['nb_vagal']+$val['nb_hypoglycemie']+$val['nb_AVC']+$val['nb_coma']+$val['nb_ISA']+$val['nb_anesthesie']+$val['nb_conscience_autre'];
    //Stocke dans un tableau
    $nbUrgPerDoctor[$nbTotalInRow]++;

    //Dénombre le nombre d'évacuation total
    $Tnb_evacuations+=$val['nb_evacuations'];

    /*
    PAGE 3
    */
	//
    $Tdiag_angor+=$val['diag_angor'];
    $Ttrt_angor+=$val['trt_angor'];
    $Tdiag_hypertension+=$val['diag_hypertension'];
    $Ttrt_hypertension+=$val['trt_hypertension'];
    $Tdiag_dissection+=$val['diag_dissection'];
    $Ttrt_dissection+=$val['trt_dissection'];
    $Tdiag_arretcardiaque+=$val['diag_arretcardiaque'];
    $Ttrt_arretcardiaque+=$val['trt_arretcardiaque'];
    $Tdiag_vagal+=$val['diag_vagal'];
    $Ttrt_vagal+=$val['trt_vagal'];
    $Tdiag_hypoglycemie+=$val['diag_hypoglycemie'];
    $Ttrt_hypoglycemie+=$val['trt_hypoglycemie'];
    $Tdiag_AVC+=$val['diag_AVC'];
    $Ttrt_AVC+=$val['trt_AVC'];
    $Tdiag_ISA+=$val['diag_ISA'];
    $Ttrt_ISA+=$val['trt_ISA'];
    $Tdiag_asthme+=$val['diag_asthme'];
    $Ttrt_asthme+=$val['trt_asthme'];
    $Tdiag_inhalation+=$val['diag_inhalation'];
    $Ttrt_inhalation+=$val['trt_inhalation'];
    $Tdiag_quincke+=$val['diag_quincke'];
    $Ttrt_quincke+=$val['trt_quincke'];
    $Tdiag_OAP+=$val['diag_OAP'];
    $Ttrt_OAP+=$val['trt_OAP'];
    $Tdiag_embolie+=$val['diag_embolie'];
    $Ttrt_embolie+=$val['trt_embolie'];
    $Tdiag_anesthesie+=$val['diag_anesthesie'];
    $Ttrt_anesthesie+=$val['trt_anesthesie'];
    $Tdiag_urticaire+=$val['diag_urticaire'];
    $Ttrt_urticaire+=$val['trt_urticaire'];
    $Tdiag_anaphylaxie+=$val['diag_anaphylaxie'];
    $Ttrt_anaphylaxie+=$val['trt_anaphylaxie'];
    $Tdiag_epilepsie+=$val['diag_epilepsie'];
    $Ttrt_epilepsie+=$val['trt_epilepsie'];
    $Tdiag_tetanie+=$val['diag_tetanie'];
    $Ttrt_tetanie+=$val['trt_tetanie'];
    
    //EXPERTISE par praticien
    $expDiagInRow=$val['diag_angor']+$val['diag_hypertension']+$val['diag_dissection']+$val['diag_arretcardiaque']+$val['diag_vagal']+$val['diag_hypoglycemie']+$val['diag_AVC']+$val['diag_ISA']+$val['diag_asthme']+$val['diag_inhalation']+$val['diag_quincke']+$val['diag_OAP']+$val['diag_embolie']+$val['diag_anesthesie']+$val['diag_urticaire']+$val['diag_anaphylaxie']+$val['diag_epilepsie']+$val['diag_tetanie'];
    //Stocke dans un tableau
    $expDiagPerDoctor[$expDiagInRow]++;
    $expTrtInRow=$val['trt_angor']+$val['trt_hypertension']+$val['trt_dissection']+$val['trt_arretcardiaque']+$val['trt_vagal']+$val['trt_hypoglycemie']+$val['trt_AVC']+$val['trt_ISA']+$val['trt_asthme']+$val['trt_inhalation']+$val['trt_quincke']+$val['trt_OAP']+$val['trt_embolie']+$val['trt_anesthesie']+$val['trt_urticaire']+$val['trt_anaphylaxie']+$val['trt_epilepsie']+$val['trt_tetanie'];
    //Stocke dans un tableau
    $expTrtPerDoctor[$expTrtInRow]++;
    

    /*
    PAGE 4
    */
    
    //
    $Tnb_formation+=$val['formationUrgence'];
    
    //$formationInit=0;
    if($val['formationUrgence'] && ($val['formationUrgenceAnnee']<=$val['diplome'])){
        $formationInit++;
    }
    //
    if($val['formationUrgence']){
        $freqformation[$val['freqFormationUrgence']]++;
    }
    //
    $supFormation['video']+=$val['video'];
    $supFormation['livre']+=$val['livre'];
    $supFormation['fiches']+=$val['fiches'];

    /*
    PAGE 5
    */
    //
    $Tprst_oxygene+=$val['prst_oxygene'];
    $Tutl_oxygene+=$val['utl_oxygene'];
    $Tprst_DSA+=$val['prst_DSA'];
    $Tutl_DSA+=$val['utl_DSA'];
    $Tprst_tensiometre+=$val['prst_tensiometre'];
    $Tutl_tensiometre+=$val['utl_tensiometre'];
    $Tprst_BAVU+=$val['prst_BAVU'];
    $Tutl_BAVU+=$val['utl_BAVU'];
    $Tprst_canule+=$val['prst_canule'];
    $Tutl_canule+=$val['utl_canule'];
    $Tprst_IM+=$val['prst_IM'];
    $Tutl_IM+=$val['utl_IM'];
    $Tprst_IV+=$val['prst_IV'];
    $Tutl_IV+=$val['utl_IV'];
    $Tprst_adrenaline+=$val['prst_adrenaline'];
    $Tutl_adrenaline+=$val['utl_adrenaline'];
    $Tprst_trinitrine+=$val['prst_trinitrine'];
    $Tutl_trinitrine+=$val['utl_trinitrine'];
    $Tprst_glucagon+=$val['prst_glucagon'];
    $Tutl_glucagon+=$val['utl_glucagon'];
    $Tprst_salbutamol+=$val['prst_salbutamol'];
    $Tutl_salbutamol+=$val['utl_salbutamol'];
    
    //EXPERTISE par praticien
$expPrstInRow=$val['prst_oxygene']+$val['prst_DSA']+$val['prst_tensiometre']+$val['prst_BAVU']+$val['prst_canule']+$val['prst_IM']+$val['prst_IV']+$val['prst_adrenaline']+$val['prst_trinitrine']+$val['prst_glucagon']+$val['prst_salbutamol'];
    //Stocke dans un tableau
    $expPrstPerDoctor[$expPrstInRow]++;  
    $expUtlInRow=$val['utl_oxygene']+$val['utl_DSA']+$val['utl_tensiometre']+$val['utl_BAVU']+$val['utl_canule']+$val['utl_IM']+$val['utl_IV']+$val['utl_adrenaline']+$val['utl_trinitrine']+$val['utl_glucagon']+$val['utl_salbutamol'];
    //Stocke dans un tableau
    $expUtlPerDoctor[$expUtlInRow]++;
    
    
    //STATs +
    //Regroupement des praticiens en période de 10 ans depuis 2013
    //Puis pour chacun des groupes:
    //-total des urgences anxiogenes : vage hyperventillation hypo
    //-total expertise trt diag et prt et ut
    //$statsPlus=array();
    //2014-$val['diplome']
    $cell=floor((2014-$val['diplome']) / 10.1);
    $statsPlusDiplome[$cell]['Tpraticient']++;
    $statsPlusDiplome[$cell]['TSyncopeVasovagale']+=$val['nb_vagal'];
    $statsPlusDiplome[$cell]['THyperventilation']+=$val['nb_tetanie'];
    $statsPlusDiplome[$cell]['THypoglycémie']+=$val['nb_hypoglycemie'];
    //
    $statsPlusDiplome[$cell]['TexpDiag']+=$expDiagInRow;
    $statsPlusDiplome[$cell]['expTrt']+=$expTrtInRow;
    //
    $statsPlusDiplome[$cell]['TexpPrst']+=$expPrstInRow;
    $statsPlusDiplome[$cell]['TexpUtl']+=$expUtlInRow;
	

    if($val['formationUrgence']==1){
        $cell=$val['freqFormationUrgence'];
        $statsPlusFormation[$cell]['Tpraticient']++;
        $statsPlusFormation[$cell]['TSyncopeVasovagale']+=$val['nb_vagal'];
        $statsPlusFormation[$cell]['THyperventilation']+=$val['nb_tetanie'];
        $statsPlusFormation[$cell]['THypoglycémie']+=$val['nb_hypoglycemie'];
        //
        $statsPlusFormation[$cell]['TexpDiag']+=$expDiagInRow;
        $statsPlusFormation[$cell]['expTrt']+=$expTrtInRow;
        //
        $statsPlusFormation[$cell]['TexpPrst']+=$expPrstInRow;
        $statsPlusFormation[$cell]['TexpUtl']+=$expUtlInRow;    
    }else{
        $cell=999;
        $statsPlusFormation[$cell]['Tpraticient']++;
        $statsPlusFormation[$cell]['TSyncopeVasovagale']+=$val['nb_vagal'];
        $statsPlusFormation[$cell]['THyperventilation']+=$val['nb_tetanie'];
        $statsPlusFormation[$cell]['THypoglycémie']+=$val['nb_hypoglycemie'];
        //
        $statsPlusFormation[$cell]['TexpDiag']+=$expDiagInRow;
        $statsPlusFormation[$cell]['expTrt']+=$expTrtInRow;
        //
        $statsPlusFormation[$cell]['TexpPrst']+=$expPrstInRow;
        $statsPlusFormation[$cell]['TexpUtl']+=$expUtlInRow;    
    }
}
/******************************************************************************/
// Post traitement
/******************************************************************************/
//Identification des sources
$Direct_contact_NR=0;
$REP_direct_contact=0;
$TDirect_contact=0;
$REP_formation_continue_fac=0;
$REP_handident=0;
$REP_CNO=0;
foreach($donnees_contacts as $key => $val){
    if($val['email']=='christine.zaporogetz@univ-amu.fr'){
        $REP_formation_continue_fac=$val['share'];    
    }

    elseif($val['email']=='corinne.tardieu@ap-hm.fr'){
        $REP_handident=$val['share'];
    }

    elseif($val['email']=='laurent.darmouni@gmail.com'){
        $REP_CNO=$val['share'];
    }

    elseif($val['email']=='cabinetdentairelugari@gmail.com'){
        $REP_ACDRA=$val['share'];
    }

    elseif($val['lastcontact']!='9999-12-31'){
        $Direct_contact_NR++;
    }
}
$REP_direct_contact=$nbparticipants-($REP_ACDRA+$REP_CNO+$REP_handident+$REP_formation_continue_fac);
$TDirect_contact=$Direct_contact_NR+$REP_direct_contact;

//Total de toutes les urgences
$TTurgences=$Tnb_angor+$Tnb_infarctus+$Tnb_hypertension+$Tnb_dissection+$Tnb_arretcardiaque+$Tnb_cardiaque_autre+$Tnb_asthme+$Tnb_inhalation+$Tnb_quincke+$Tnb_OAP+$Tnb_embolie+$Tnb_resp_autre+$Tnb_urticaire+$Tnb_anaphylaxie+$Tnb_allergie_autre+$Tnb_epilepsie+$Tnb_tetanie+$Tnb_convultion_autre+$Tnb_vagal+$Tnb_hypoglycemie+$Tnb_AVC+$Tnb_coma+$Tnb_ISA+$Tnb_anesthesie+$Tnb_conscience_autre;

//Moyenne d'année d'experience
$M_AnneeExp=$Tnb_AnneeExp/$nbparticipants;
$M_Evacuations=$Tnb_evacuations/$nbparticipants;
/******************************************************************************/
// Boucle n°2 pour le calcul des variances 
/******************************************************************************/
foreach($donnees as $key => $val){
    //CRITERES D'EXCLUSION
    if(($val['exercicePro_Ortho']!=0) || ($val['exercicePro_Hospi']!=0) || ($val['diplome']==2014)){
        continue;    
    }
    
    $Var_AnneeExp+=pow(((2014-$val['diplome'])-$M_AnneeExp),2);  
    $Var_Evacuations+=pow(($val['nb_evacuations']-$M_Evacuations),2);
}
/******************************************************************************/
// Post traitement 2
/******************************************************************************/
    $Var_AnneeExp/=$nbparticipants;
/******************************************************************************/
/******************************************************************************/
//Fin
?>
<section class="container">
        <div class="row">
        <div class="col-md-6"><h2>Nombre de participants</h2>
            <p>Le nombre de participants s'&eacute;l&egrave;ve actuellement &agrave; <strong><?php echo $nbparticipants; ?> (<?php echo $nbparticipants2; ?>/<?php echo $nbparticipants3; ?>) ( <?php echo $exercicePro_Ortho.': Ortho +Hspit : '.$exercicePro_Hospi; ?> exclus), soit <?php echo round(($nbparticipants/43621)*100,4);?>%</strong> de la population fran&ccedil;aise des chirurgiens dentistes.</p>
            <p>En prenant une base de <strong>40 semaines</strong> travaill&eacute;es par an l'enquete couvre : <strong><?php echo $TnbPatients*40 ?> rendez-vous</strong> ; soit en moyenne <strong><?php echo round(($TnbPatients*40)/$nbparticipants,2) ?> rendez-vous/ann&eacute;e</strong> ( <?php echo round($TnbPatients/$nbparticipants,2) ?> rendez-vous/semaine) !exclus</p>
            <p>Le taux de r&eacute;ponse est de : <br/>
            <ul>
                <li>Formation continue facultee de marseille : <?php echo $REP_formation_continue_fac ?></li>
                <li>Handident : <?php echo $REP_handident ?></li>
                <li>CNO : <?php echo $REP_CNO ?></li>
                <li>ACDRA : <?php echo $REP_ACDRA ?></li>
                <li><strong>Pour les praticients contactes directement : <?php echo $REP_direct_contact ?>/<?php echo $TDirect_contact ?> (<?php echo round(($REP_direct_contact*100)/$TDirect_contact,2) ?> %)</strong></li>
            </ul>
            <p>Temp moyen de reponse : <?php echo round($TTemp/$nbparticipants) ?>min</p>
            <p>Total d'annees d'experience : <?php echo $Tnb_AnneeExp; ?> ; soit une moyenne de <?php echo $M_AnneeExp; ?>(+/-<?php echo (sqrt($Var_AnneeExp)); ?>)</p>
        </div>
        <div class="col-md-6 text-center"><canvas id="nbparticipants" width="200" height="200"></canvas></div>
    </div>
	
    <h2>R&eacute;partitions des ann&eacute;es d'obtention du dipl&ocirc;me</h2>
    <canvas id="repdiplome" width="1170px" height="200px"></canvas>
    <div class="row">
        <div class="col-md-6">
            <pre><?php ksort($statsPlusDiplome); print_r($statsPlusDiplome); ?></pre>    
        </div>
        <div class="col-md-6">
            <pre><?php ksort($statsPlusFormation); print_r($statsPlusFormation); ?></pre>   
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"><h2>R&eacute;partition de l'orientation de l'exercie ou exercice exclusif/sp&eacute;cialis&eacute;</h2>
            <span class="label label-primary">Omi</span>
            <span class="label label-danger" style="background-color:#D51D2A;">Chir</span>
            <span class="label label-danger">Paro</span>
            <span class="label label-warning">Endo</span>
            <span class="label label-info">Ortho</span>
            <span class="label label-default">Hospit</span>
            <span class="label label-success">Autre</span>
            <pre>
<?php
    echo '$exercicePro_Omni='.$exercicePro_Omni.'<br/>';
    echo '$exercicePro_Ortho='.$exercicePro_Ortho.'<br/>';
    echo '$exercicePro_Hospi='.$exercicePro_Hospi.'<br/>';
    echo '$exercicePro_ChirBuc='.$exercicePro_ChirBuc.'<br/>';
    echo '$exercicePro_Paro='.$exercicePro_Paro.'<br/>';
    echo '$exercicePro_Endo='.$exercicePro_Endo.'<br/>';
    echo '$exercicePro_Autre='.$exercicePro_Autre.'<br/>';
?>		
		</pre>
        </div>
        <div class="col-md-6 text-center"><canvas id="typeexercice" width="200" height="200"></canvas></div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <canvas id="Tnburgencesmed" width="500" height="300"></canvas>
        </div>
        <div class="col-md-6">
            <h2>Urgences medicales</h2>
            <p><strong><?php echo $TTurgences ?></strong> urgences ont ete ressancees, soit une incidence de <strong><?php echo round($TTurgences/$nbparticipants,2) ?> urgences medicales/praticien/an</strong> </p>
            <p>Le malaise vagal represente  : <strong><?php echo round(($Tnb_vagal*100)/$TTurgences,2) ?> % des urgences</strong> </p>
        </div>
    </div>
	<div class="row">
		<pre>
<?php
    echo 'Tnb_angor='.$Tnb_angor.'('.round(($Tnb_angor*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_infarctus='.$Tnb_infarctus.'('.round(($Tnb_infarctus*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_hypertension='.$Tnb_hypertension.'('.round(($Tnb_hypertension*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_dissection='.$Tnb_dissection.'('.round(($Tnb_dissection*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_arretcardiaque='.$Tnb_arretcardiaque.'('.round(($Tnb_arretcardiaque*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_cardiaque_autre='.$Tnb_cardiaque_autre.'('.round(($Tnb_cardiaque_autre*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_asthme='.$Tnb_asthme.'('.round(($Tnb_asthme*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_inhalation='.$Tnb_inhalation.'('.round(($Tnb_inhalation*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_quincke='.$Tnb_quincke.'('.round(($Tnb_quincke*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_OAP='.$Tnb_OAP.'('.round(($Tnb_OAP*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_embolie='.$Tnb_embolie.'('.round(($Tnb_embolie*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_resp_autre='.$Tnb_resp_autre.'('.round(($Tnb_resp_autre*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_urticaire='.$Tnb_urticaire.'('.round(($Tnb_urticaire*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_anaphylaxie='.$Tnb_anaphylaxie.'('.round(($Tnb_anaphylaxie*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_allergie_autre='.$Tnb_allergie_autre.'('.round(($Tnb_allergie_autre*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_epilepsie='.$Tnb_epilepsie.'('.round(($Tnb_epilepsie*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_tetanie='.$Tnb_tetanie.'('.round(($Tnb_tetanie*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_convultion_autre='.$Tnb_convultion_autre.'('.round(($Tnb_convultion_autre*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_vagal='.$Tnb_vagal.'('.round(($Tnb_vagal*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_hypoglycemie='.$Tnb_hypoglycemie.'('.round(($Tnb_hypoglycemie*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_AVC='.$Tnb_AVC.'('.round(($Tnb_AVC*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_coma='.$Tnb_coma.'('.round(($Tnb_coma*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_ISA='.$Tnb_ISA.'('.round(($Tnb_ISA*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_anesthesie='.$Tnb_anesthesie.'('.round(($Tnb_anesthesie*100)/$TTurgences,2).'%)'.'<br/>';
    echo 'Tnb_conscience_autre='.$Tnb_conscience_autre.'('.round(($Tnb_conscience_autre*100)/$TTurgences,2).'%)';
?>		
		</pre>
	</div>
    <div class="row">
        <div class="col-md-6 text-center">
            <canvas id="nburgencesperprat" width="500" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <pre><?php ksort($nbUrgPerDoctor); print_r($nbUrgPerDoctor); ?></pre>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"><h2>Diagnostic et traitement</h2>
            <span class="label label-success">Diagnostic</span>
            <span class="label label-primary">Traitement</span>
		<pre>
<?php
    echo 'Tdiag_angor='.$Tdiag_angor.'('.round(($Tdiag_angor*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_hypertension='.$Tdiag_hypertension.'('.round(($Tdiag_hypertension*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_dissection='.$Tdiag_dissection.'('.round(($Tdiag_dissection*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_arretcardiaque='.$Tdiag_arretcardiaque.'('.round(($Tdiag_arretcardiaque*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_asthme='.$Tdiag_asthme.'('.round(($Tdiag_asthme*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_inhalation='.$Tdiag_inhalation.'('.round(($Tdiag_inhalation*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_quincke='.$Tdiag_quincke.'('.round(($Tdiag_quincke*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_OAP='.$Tdiag_OAP.'('.round(($Tdiag_OAP*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_embolie='.$Tdiag_embolie.'('.round(($Tdiag_embolie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_urticaire='.$Tdiag_urticaire.'('.round(($Tdiag_urticaire*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_anaphylaxie='.$Tdiag_anaphylaxie.'('.round(($Tdiag_anaphylaxie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_epilepsie='.$Tdiag_epilepsie.'('.round(($Tdiag_epilepsie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_tetanie='.$Tdiag_tetanie.'('.round(($Tdiag_tetanie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_vagal='.$Tdiag_vagal.'('.round(($Tdiag_vagal*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_hypoglycemie='.$Tdiag_hypoglycemie.'('.round(($Tdiag_hypoglycemie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_AVC='.$Tdiag_AVC.'('.round(($Tdiag_AVC*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_ISA='.$Tdiag_ISA.'('.round(($Tdiag_ISA*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Tdiag_anesthesie='.$Tdiag_anesthesie.'('.round(($Tdiag_anesthesie*100)/$nbparticipants,2).'%)'.'<br/>';
?>		
		</pre>
        <pre><?php ksort($expDiagPerDoctor); print_r($expDiagPerDoctor); ?></pre>
		<pre>
<?php
    echo 'Ttrt_angor='.$Ttrt_angor.'('.round(($Ttrt_angor*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_hypertension='.$Ttrt_hypertension.'('.round(($Ttrt_hypertension*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_dissection='.$Ttrt_dissection.'('.round(($Ttrt_dissection*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_arretcardiaque='.$Ttrt_arretcardiaque.'('.round(($Ttrt_arretcardiaque*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_asthme='.$Ttrt_asthme.'('.round(($Ttrt_asthme*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_inhalation='.$Ttrt_inhalation.'('.round(($Ttrt_inhalation*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_quincke='.$Ttrt_quincke.'('.round(($Ttrt_quincke*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_OAP='.$Ttrt_OAP.'('.round(($Ttrt_OAP*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_embolie='.$Ttrt_embolie.'('.round(($Ttrt_embolie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_urticaire='.$Ttrt_urticaire.'('.round(($Ttrt_urticaire*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_anaphylaxie='.$Ttrt_anaphylaxie.'('.round(($Ttrt_anaphylaxie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_epilepsie='.$Ttrt_epilepsie.'('.round(($Ttrt_epilepsie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_tetanie='.$Ttrt_tetanie.'('.round(($Ttrt_tetanie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_vagal='.$Ttrt_vagal.'('.round(($Ttrt_vagal*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_hypoglycemie='.$Ttrt_hypoglycemie.'('.round(($Ttrt_hypoglycemie*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_AVC='.$Ttrt_AVC.'('.round(($Ttrt_AVC*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_ISA='.$Ttrt_ISA.'('.round(($Ttrt_ISA*100)/$nbparticipants,2).'%)'.'<br/>';
    echo 'Ttrt_anesthesie='.$Ttrt_anesthesie.'('.round(($Ttrt_anesthesie*100)/$nbparticipants,2).'%)'.'<br/>';
?>		
		</pre>
        <pre><?php ksort($expTrtPerDoctor); print_r($expTrtPerDoctor); ?></pre>
        </div>

        <div class="col-md-6 text-center">
            <canvas id="diag_trt_urgences" width="500" height="500"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"><?php echo $Tnb_evacuations ?> soit une moyenne de <?php echo $M_Evacuations; ?>(+/-<?php echo (sqrt($Var_Evacuations)); ?>)</div>
        <div class="col-md-6"><h2>Evacuation medicalisee</h2></div>
    </div>

    <div class="row">
        <div class="col-md-6"><h2>Formation</h2><?php echo $Tnb_formation ?> praticiens ont eu une formation dont initiale : <?php echo $formationInit ?><br/></div>
        <div class="col-md-6"><pre><?php ksort($freqformation); print_r($freqformation); ?></pre></div>
    </div>

    <div class="row">
        <div class="col-md-6 text-center">
            <canvas id="support_formation" width="200" height="200"></canvas>
        </div>

        <div class="col-md-6"><h2>Support de formation</h2>
            <span class="label label-primary">Video</span>
            <span class="label label-danger" style="background-color:#D51D2A;">livre</span>
            <span class="label label-danger">Fiches</span>
            <pre><?php print_r($supFormation); ?></pre>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6"><h2>Materiel a disposition et utilisation</h2>
            <span class="label label-warning">Present</span>
            <span class="label label-danger">Utilisation</span>
            <pre>
<?php
    echo 'Tprst_oxygene='.$Tprst_oxygene.'<br/>';    
    echo 'Tprst_DSA='.$Tprst_DSA.'<br/>';
    echo 'Tprst_tensiometre='.$Tprst_tensiometre.'<br/>';    
    echo 'Tprst_BAVU='.$Tprst_BAVU.'<br/>';   
    echo 'Tprst_canule='.$Tprst_canule.'<br/>';   
    echo 'Tprst_IM='.$Tprst_IM.'<br/>';    
    echo 'Tprst_IV='.$Tprst_IV.'<br/>';    
    echo 'Tprst_adrenaline='.$Tprst_adrenaline.'<br/>'; 
    echo 'Tprst_trinitrine='.$Tprst_trinitrine.'<br/>';
    echo 'Tprst_glucagon='.$Tprst_glucagon.'<br/>';
    echo 'Tprst_salbutamol='.$Tprst_salbutamol.'<br/>';
?>		
            </pre>
            <pre><?php ksort($expPrstPerDoctor); print_r($expPrstPerDoctor); ?></pre>
            <pre>
<?php	
	echo 'Tutl_oxygene='.$Tutl_oxygene.'<br/>';
	echo 'Tutl_DSA='.$Tutl_DSA.'<br/>';
	echo 'Tutl_tensiometre='.$Tutl_tensiometre.'<br/>';
	echo 'Tutl_BAVU='.$Tutl_BAVU.'<br/>';
	echo 'Tutl_canule='.$Tutl_canule.'<br/>';
	echo 'Tutl_IM='.$Tutl_IM.'<br/>';
	echo 'Tutl_IV='.$Tutl_IV.'<br/>';
	echo 'Tutl_adrenaline='.$Tutl_adrenaline.'<br/>';
	echo 'Tutl_trinitrine='.$Tutl_trinitrine.'<br/>';
	echo 'Tutl_glucagon='.$Tutl_glucagon.'<br/>';
	echo 'Tutl_salbutamol='.$Tutl_salbutamol.'<br/>';
?>
            </pre>
            <pre><?php ksort($expUtlPerDoctor); print_r($expUtlPerDoctor); ?></pre>
        </div>

        <div class="col-md-6 text-center">
            <canvas id="prst_utl_urgences" width="500" height="500"></canvas>
        </div>
    </div>

    <div class="sponsors">
        <img src="./images/logo_odontologie_rvb.png" alt="" class="img-rounded">
        <img src="./images/aphm-contour-transp.png" alt="" class="img-rounded"> 
        <img src="./images/handident.png" alt="" class="img-rounded"> 
        <img src="./images/CNO.png" alt="" class="img-rounded"> 
    </div>
</section>