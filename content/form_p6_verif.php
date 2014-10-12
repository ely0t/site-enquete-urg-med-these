<?php
$ERREUR='';
$ERREUR_LABEL=array();
//
$retrn=true;
$email = (isset($_POST['email']) && strlen($_POST['email'])<=255 && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? $_POST['email'] : '';
if($email!=''){
    try
    {
            $bdd = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    } 
    catch(Exception $e)
    {
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
    }
    
    $req = $bdd->prepare('INSERT INTO contacts (id, ui2d, email, share, lastcontact) VALUES(:id, :ui2d, :email, :share, :lastcontact)');
    $retrn=$req->execute(array(
        'id'=>'',
        'ui2d'=>sha1($email),
        'email'=>$email,
        'share'=>0,
        'lastcontact'=>'9999-12-31'
    ));
    $req->closeCursor();
}
if(($email=='') && strlen($_POST['email'])>0){
    $ERREUR='<li>Addresse email incorrecte.</li>';
}
?>