<?php
if (!defined('THESE')){
	header('Location: ../index.php');
}
# include parseCSV class.
require_once('./lib/parsecsv.lib.php');

/******************************************************************************/
$ERREUR='';
$INFO='';
$organisme=(isset($_POST['organisme']) && strlen($_POST['organisme'])<=255 ) ? filter_var($_POST['organisme'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES) : 'urgencemedodonto.fr';
$listemail=(isset($_POST['listemail'])) ? $_POST['listemail'] : '';
//upload
if(isset($_FILES['csvfile']) && (empty($_FILES['csvfile']['name'])==false)){
    if($_FILES['csvfile']['error'] > 0){
     $ERREUR='<li>Erreur lors de l\'importation du fichier .CSV.</li>';   
    }
    $ext = strtoupper(substr(strrchr($_FILES['csvfile']['name'],'.'),1));
    if ($ext!='CSV'){
     $ERREUR='<li>Le fichier import&eacute n\'est pas un fichier .CSV.</li>';   
    }
    $destination=tempnam('./CSVs/','csv_').'.csv';
    move_uploaded_file($_FILES['csvfile']['tmp_name'],$destination);
}
//
if(isset($_POST['submit'])){
    try
    {
            $bdd = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    } 
    catch(Exception $e)
    {
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
    }
    $req = $bdd->prepare('INSERT INTO contacts (id, ui2d, email, share, organisme, lastcontact) VALUES(:id, :ui2d, :email, :share, :organisme, :lastcontact)');
    
    $nbemail=0;
    $nbdoublon=0;
    if(isset($_FILES['csvfile']) && (empty($_FILES['csvfile']['name'])==false) && ($ERREUR=='')){
        # create new parseCSV object.
        $csv = new parseCSV();
        # Parse using automatic delimiter detection...
        $csv->auto($destination);
        // double foreach
        foreach($csv->data as $pkey => $pval){
            foreach($pval as $key => $val){
                if(stripos($key,'E-mail')!== false){
                    if(($val!='') && strlen($val)<=255 && filter_var($val, FILTER_VALIDATE_EMAIL)){
                        //Sauvegarde
                        $retrn=$req->execute(array(
                            'id'=>'',
                            'ui2d'=>sha1($val),
                            'email'=>$val,
                            'share'=>0,
                            'organisme'=>$organisme,
                            'lastcontact'=>''
                        ));
                        if($retrn==true){$nbemail++;}else{$nbdoublon++;}
                    }
                }
            }
        }
    }else{ 
        $delimiteur=substr_count($listemail,';')>substr_count($listemail,',')?';':',';
        $listemail_arr=explode($delimiteur,$listemail); 
        foreach($listemail_arr as $key => $val){
                $val=trim($val);
                if(($val!='') && strlen($val)<=255 && filter_var($val, FILTER_VALIDATE_EMAIL)){
                    //Sauvegarde
                    $retrn=$req->execute(array(
                        'id'=>'',
                        'ui2d'=>sha1($val),
                        'email'=>$val,
                        'share'=>0,
                        'organisme'=>$organisme,
                        'lastcontact'=>''
                    ));
                    if($retrn==true){$nbemail++;}else{$nbdoublon++;}
                }
            }
    }
        
    $req->closeCursor();
    $INFO='<em>Info :</em> '.$nbemail.' import&eacute;(s) avec succ&egrave;s et '.$nbdoublon.' doublon &eacute;limin&eacute;(s)';
}
?>
<section class="container">
    <h2 class="font-thin">Messagerie  :</h2>
    <p></p>
    <hr/>
<?php
    if(isset($_POST['submit'])){
        if($ERREUR<>''){
            echo'<div class="alert alert-danger">';
            echo'<h4>Oups ! il semble y avoir un probleme ...</h4>';
            echo'<p>Un probl&egrave;me a &eacute;t&eacute; rencontr&eacute; lors de la tentative d\'envoi des emails. Merci de re-appuyer sur "Envoyer" ou de contacter <a href="mailto:postmaster@urgencemedodonto.fr">postmaster@urgencemedodonto.fr</a> si le probl&egrave;me persiste.</p>';
            echo '<ul>'.$ERREUR.'</ul>';    
            echo'</div>';
        }else{
?>
    <div class="alert alert-success">
        <h4>F&eacute;licitation !</h4>
        <p>L'envoi des emails devrait &ecirc;tre &eacute;ffectu&eacute; d'i&ccedil;i 24h. Nous vous remercions grandement pour votre participation &agrave; cette &eacute;tude.</p>
        <?php echo $INFO; ?>
    </div>   
<?php
    }}
?>
    <form method="post" action="index.php" role="form" enctype="multipart/form-data">
        <h3 class="font-thin">D&eacute;nomination de l'organisme :</h3>
        <input class="form-control" type="text" name="organisme">
        <h3 class="font-thin">Adresse(s) email(s) du ou des destinataires :</h3>
        <h4 class="font-thin">Importer les contacts au format CSV ...</h4>
        <input class="form-control" name="csvfile" type="file">
        <h4 class="font-thin">... <strong>OU</strong> copier/coller la liste d'emails :</h4>
        <textarea class="form-control" name="listemail" rows="4"></textarea>
        <br/>
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-default btn-lg center">Envoyer <span class="glyphicon glyphicon-chevron-right"></span></button>
        </div>
    </form>
</section>
<div class="sponsors">   
    <img src="./images/logo_odontologie_rvb.png" alt="" class="img-rounded">
    <img src="./images/aphm-contour-transp.png" alt="" class="img-rounded"> 
    <img src="./images/handident.png" alt="" class="img-rounded"> 
    <img src="./images/CNO.png" alt="" class="img-rounded"> 
</div>