<?php
/*******************************************************************************/
// Permet de créer automatiquement la base de données lors de l’envoi des réponses du premier formulaire.
// Variables dans $_SESSION['form'][$var]
/*******************************************************************************/
mysqli_connect("127.0.0.1","root","") or die(mysql_error());
mysql_select_db("test") or die(mysql_error());
echo 'Connected successfully';

// Création de la requête de construction de la table dans la BDD
// $_SESSION['form'][$var]
$sql_autogen='';
foreach($_SESSION['form'] as $key => $value){
    if(is_bool($value) || in_array($value,array('0','1'))){
        $sql_autogen.=$key.' TINYINT,'; 
    }else{
        $sql_autogen.=$key.' INT,';
    }
}
//
$sql =  'CREATE TABLE urgencemed( '.
        'id INT NOT NULL AUTO_INCREMENT, '.
        'Ttime INT NOT NULL, '.
        $sql_autogen.
        'primary key ( id ))';

// Exécution
$retval = mysql_query($sql);
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database created successfully\n";
mysql_close()
?>