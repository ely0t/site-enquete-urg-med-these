<?php
/*******************************************************************************/
// Configuration.
/*******************************************************************************/
//Constantes
define('THESE', true);
define('debug_mode', false);
define('CONTENT', 'content/');
define('SITEURL', 'www.urgencemedodonto.fr');
define('SITEMAIL', '<a href="mailto:contact@urgencemedodonto.fr">contact@urgencemedodonto.fr</a>');

//Tableau des pages pouvant être incluses
$array_inc_pages = array(
    'home',
    'about'
);
// ------------------------------------------------------------------------//Fin de la configuration
// Fonctions.
/*
 * 	Permet de sélectionner le bouton de navigation courant. 
 */ 
function checkcrt($ctrl,$value) {
  if ($ctrl==$value)
  		return 'class="active"';
  else return '';
}
/*
 * Cette fonction sert à debugger
 */
function d($d){
	echo '<pre>';
	print_r($d);
	echo '</pre>';
}
// ------------------------------------------------------------------------//Fin des fonctions
//Recupération de la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
//vérification
if(!in_array($page, $array_inc_pages))
	$page='home';

//Si fichier non présent : ERREUR 404		
if(!is_file(CONTENT.$page.'.php'))
	 $page='Erreur404';

//DISPATCHER
ob_start();
include(CONTENT.$page.'.php');
$content=ob_get_contents();
ob_end_clean();

//Inclusion du template
require(CONTENT.'template.php');
?>