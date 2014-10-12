<?php
if (!defined('THESE')){
	header('Location: ../index.php');
}
/******************************************************************************/

$recall_all=(isset($_GET['recall_all'])) ? $_GET['recall_all']==true : false;

try
{
        $bdd = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
} 
catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}
if($recall_all){
    //$req = $bdd->prepare("SELECT * FROM contacts where lastcontact<>'9999-12-31' ");
}else{
   $req = $bdd->prepare("SELECT * FROM contacts where lastcontact=0 "); 
}

$retrn=$req->execute(array());
$donnees=$req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

$nb_erreur=0;
foreach( $donnees as $val){
    //Template
    $token=$val['ui2d'];
    $organisme=!empty($val['organisme']) ? $val['organisme'] : 'urgencemedodonto.fr';
    ob_start();
    include(CONTENT.'email_template.php');
    $mail_content=ob_get_contents();
    ob_end_clean();   
    //Envoi du mail
    //Les variables sont toutes remplies, on génère donc l' email...
    //Header additionnel : Cc (Copie Carbone), Bcc (Copie Carbone Cachée),
    $headers ='From: "'.'Ballester Benoit'.'" <enquete@urgencemedodonto.fr>'."\r\n";
    $headers .='Reply-To: enquete@urgencemedodonto.fr'."\r\n";
    $headers .='MIME-Version: 1.0'."\r\n" ; 
    $headers .='Content-Type: text/html; charset="utf-8"'."\r\n";
    $headers .='Content-Transfer-Encoding: 8bit'."\r\n";
    
    if(filter_var($val['email'], FILTER_VALIDATE_EMAIL)){
        if(mail($val['email'], 'La profession face aux urgences medicales au cabinet dentaire, une enquete proposee par '.$organisme, $mail_content, $headers)){
            $req = $bdd->prepare('UPDATE contacts SET lastcontact=:lastcontact WHERE id=:id');
            $retrn=$req->execute(array(
                'id'=>$val['id'],
                'lastcontact'=>date('Y-m-d H:i:s')
            ));
        }else{
            $nb_erreur++;
        }
    }
}

if($ERREUR<>''){
    echo'<div class="alert alert-danger">';
    echo'<h4>Oups ! il semble y avoir un probleme ...</h4>';
    echo'<p>Un probl&egrave;me a &eacute;t&eacute; rencontr&eacute; lors de la tentative d\'envoi de '.$nb_erreur.' email(s) sur '.count($donnees).'. Merci de re-appuyer sur "Envoyer" ou de contacter <a href="mailto:postmaster@urgencemedodonto.fr">postmaster@urgencemedodonto.fr</a> si le probl&egrave;me persiste.</p>';
    echo '<ul>'.$ERREUR.'</ul>';    
    echo'</div>';
}else{
?>
    <div class="alert alert-success">
        <h4>F&eacute;licitation !</h4>
        <p>L'envoi des <?php echo count($donnees); ?> emails a &eacute;t&eacute; &eacute;ffectu&eacute; avec succ&egrave;s.</p>
    </div>   
<?php
}
?>