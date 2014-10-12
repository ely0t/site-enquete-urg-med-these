<?php
if (!defined('THESE')){
	header('Location: ../index.php');
}
/******************************************************************************/
$ui2d=(isset($_GET['token']) && preg_match("#^[0-9A-Z]{40}$#", strtoupper($_GET['token'])))? $_GET['token'] : '';
?>
<div class="bannertop">
    <img src="images/inhalation.jpg" alt="" />
    <img src="images/urgences.jpg" alt="" />
    <img src="images/Emergencies.jpg" alt="" />
    <img src="images/massagecardiaque.jpg" alt="" />
    <img src="images/inhalation.jpg" alt="" />
    <img src="images/urgences.jpg" alt="" />
    <img src="images/Emergencies.jpg" alt="" />
    <img src="images/massagecardiaque.jpg" alt="" />
    <img src="images/inhalation.jpg" alt="" />
    <img src="images/urgences.jpg" alt="" />
    <img src="images/Emergencies.jpg" alt="" />
    <img src="images/massagecardiaque.jpg" alt="" />
    <img src="images/inhalation.jpg" alt="" />
    <img src="images/urgences.jpg" alt="" />
    <img src="images/Emergencies.jpg" alt="" />
</div>
<section class="container">
    <div class="intro">
        <h3 class="font-thin">Pr&eacute;ambule ...</h3>
        <p class="lettrine gras">Lorsqu'elle survient, l'urgence m&eacute;dicale au cabinet dentaire peut mettre en p&eacute;ril la vie du patient. Il est de la responsabilit&eacute;<sup>[1,2]</sup> du chirurgien-dentiste d'effectuer une prise en charge rapide et adapt&eacute;e afin d'en diminuer la morbidit&eacute; et la mortalit&eacute;.</p>
        <p>Elle est g&eacute;n&eacute;ralement per&ccedil;ue comme rare (0,7 cas par an<sup>[3]</sup> ou en moyenne un cas tous les 3-4 ans<sup>[4]</sup>). Cependant une &eacute;tude men&eacute;e en Allemagne en 2008 par Muller et al.<sup>[5]</sup> montre que 57% des chirurgiens-dentistes interrog&eacute;s rapportent plus de trois urgences m&eacute;dicales et 36% plus de dix urgences m&eacute;dicales sur une p&eacute;riode de 12 mois.</p>
        <p>En France les &eacute;tudes montrent que les praticiens s'estiment mal form&eacute;s et souvent d&eacute;munis face aux urgences m&eacute;dicales au cabinet<sup>[6,7]</sup></p>
        <p>Dans la continuit&eacute; des &eacute;tudes parues en 2000 et 2004, cette enqu&ecirc;te a pour objectifs de r&eacute;&eacute;valuer :</p>
        <ol>
            <li>La pr&eacute;valence des urgences m&eacute;dicales au cabinet dentaire.</li>
            <li>L'auto-appr&eacute;ciation des chirurgiens dentistes sur leur capacit&eacute; de diagnostic et de prise en charge des urgences m&eacute;dicales au cabinet dentaire.</li>
            <li>Leur demande de formation aux  gestes et techniques de premiers secours.</li>
            <li>La disponibilit&eacute; imm&eacute;diate de certains m&eacute;dicaments et  dispositifs m&eacute;dicaux dans leur cabinet.</li>
        </ol>
        <p class="gras">Merci de prendre une dizaine de minutes pour r&eacute;pondre &agrave; ce questionnaire anonyme qui permettra :</p>
        <ol class="gras">
            <li>de faire le point sur vos connaissances et de vous sensibiliser face aux urgences m&eacute;dicales.</li>
            <li>de mieux appr&eacute;cier les besoins de la profession en mati&egrave;re d'urgences m&eacute;dicales au cabinet.</li>
            <li>de guider la r&eacute;daction de fiches de prise en charge des urgences m&eacute;dicales au cabinet dentaire.</li>
        </ol>
        <p>Les r&eacute;sultats de l'enqu&ecirc;te seront compil&eacute;s dans une th&egrave;se d'exercice r&eacute;alis&eacute;e &agrave; la facult&eacute; d'odontologie Aix-Marseille. Ils vous seront communiqu&eacute;s ainsi qu'au Conseil de l'Ordre des chirurgiens dentistes des Bouches du Rh&ocirc;ne. Vous recevrez &eacute;galement un bloc de fiches m&eacute;mos actualis&eacute;es sur les conduites &agrave; tenir en cas d'urgences m&eacute;dicales au cabinet.</p>
        <p class="gras">Bien confraternellement,</p>
    </div>
    <div class="auteurs">
        <img src="images/ball.ben.png" alt="portrait" />
        <img src="images/roche-p.gif" alt="portrait" />
        <p>Ballester Beno&icirc;t
            <br/><small>&Eacute;tudiant en odontologie 6<sup>&egrave;me</sup> ann&eacute;e, facult&eacute; Aix-Marseille</small>
            <br/>Dr Roche-Poggi
            <br/><small>Ma&icirc;tre de Conf&eacute;rences des Universit&eacute;s, Praticien Hospitalier des CSERD</small>            
        </p>
    </div>
    <br/>
    <div class="text-center">
        <a class="btn btn-primary btn-lg" href="index.php?page=form&amp;token=<?php echo $ui2d; ?>">R&eacute;pondre au questionnaire <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <div class="sponsors">
        <img src="./images/logo_odontologie_rvb.png" alt="" class="img-rounded">
        <img src="./images/aphm-contour-transp.png" alt="" class="img-rounded"> 
        <img src="./images/handident.png" alt="" class="img-rounded"> 
        <img src="./images/CNO.png" alt="" class="img-rounded"> 
    </div>
    <ol class="ref">
        <li>Article L1110-5 du Code de la sant&eacute; publique.</li>
        <li>Article R4127-204 et R4127-232 du Code de d&eacute;ontologie.</li>
        <li>Girdler, N M, et D G Smith. &laquo; Prevalence of Emergency Events in British Dental Practice and Emergency Management Skills of British Dentists &raquo;. <em>Resuscitation</em> 41, n&deg; 2 (juillet 1999): 159 167.</li>
        <li>Atherton, G. J., J. A. McCaul, et S. A. Williams. &laquo; Medical Emergencies: Medical Emergencies in General Dental Practice in Great Britain Part 1: Their Prevalence over a 10-Year Period &raquo;. <em>British Dental Journal</em> 186, n&deg; 2 (23 janvier 1999): 72-79. doi:10.1038/sj.bdj.4800023.</li>
        <li>M&uuml;ller, M P, M H&auml;nsel, S N Stehr, S Weber, et T Koch. &laquo; A State-Wide Survey of Medical Emergency Management in Dental Practices: Incidence of Emergencies and Training Experience &raquo;. <em>Emergency Medicine Journal</em>: EMJ 25, n&deg; 5 (mai 2008): 296-300. doi:10.1136/emj.2007.052936.</li>
        <li>Fleuranceau, X, Y Louville, et P Lesclous. &laquo; Les urgences m&eacute;dicales au cabinet dentaire : quel bilan ? &raquo;. <em>Information dentaire</em> 86, n&deg; 16 (avril 2004): 993-1000.</li>
        <li>39<sup>&egrave;me</sup> Congr&egrave;s de la Soci&eacute;t&eacute; Francophone de M&eacute;decine Buccale et Chirurgie Buccale. &laquo; Urgences m&eacute;dicales au cabinet dentaire, mise au point et actualit&eacute;s &raquo;. <em>M&eacute;decine Buccale et Chirurgie Buccale</em> 2000, n&deg; 6 : 39-56.</li>
    </ol>
</section>