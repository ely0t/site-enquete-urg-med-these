<?php

if (!defined('THESE')){

  header('Location: ../index.php');

}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="utf-8">

<title>Urgence m&eacute;dicale au cabinet dentaire - enqu&ecirc;te</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="author" content="BALLESTER Benoit">

<!-- Les styles -->

<link href="./assets/css/bootstrap.min.css" rel="stylesheet">

<link href="./assets/css/bootstrap-theme.min.css" rel="stylesheet">

<link href="./assets/css/custom.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

      <script src="./assets/js/html5shiv.js"></script>

      <script src="./assets/js/respond.min.js"></script>

    <![endif]-->

<!-- Le fav and touch icons -->

<link rel="apple-touch-icon-precomposed" href="images/favicon.png">

<link rel="shortcut icon" href="images/favicon.png">

<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

</head>



<body>

<!-- Header -->

<header>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 

		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

			<a class="navbar-brand" href="#">Urgence m&eacute;dicale au cabinet dentaire - Statistiques en temps r&eacute;el</a></div>

		<!-- Collect the nav links, forms, and other content for toggling -->

		<div class="collapse navbar-collapse navbar-ex1-collapse">

			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informations <b class="caret"></b></a>

					<ul class="dropdown-menu">

						<li><a href="index.php?page=about">Mentions l&eacute;gales</a></li>

					</ul>

				</li>

			</ul>

		</div>

		<!-- /.navbar-collapse --> 

	</nav>

</header>

<!-- End of Header --> 

<!-- Page content -->

<div id="main"> <?php echo $content; ?> </div>

<!-- End of Page content --> 

<!-- Footer -->

<footer>

<div class="container text-center">

  <h2>...</h2>

</div> 

</footer>

<!-- End footer --> 



<!-- Le javascript

    ================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="assets/js/jquery.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/Chart.min.js"></script>

<script type="text/javascript">

    jQuery(function ($) {

        var ctx = $("#nbparticipants").get(0).getContext("2d");

        var data = [

            {

                value: <?php echo $nbparticipants; ?>,

                color:"#F7464A"

            },

            {

                value : <?php echo (43621-$nbparticipants); ?>,

                color : "#E2EAE9"

            }

        ]

        var myNewChart = new Chart(ctx).Doughnut(data);  



<?php

//

$x=false;

$listannee='';

$listrepdiplome='';

for($i=1933;$i<2014;$i++){

    if($repdiplone[$i]!=0){$x=true;}

    if($x){

        $listannee.='"'.$i.'",';

        $listrepdiplome.=intval($repdiplone[$i]).','; //28,48,40,19,96,27

    }

}

$listannee.='"2014"';

$listrepdiplome.=intval($repdiplone[2014]);

?> 

        var ctx = $("#repdiplome").get(0).getContext("2d");

        var data = {

            labels : [<?php echo $listannee; ?>],

            datasets : [

                {

                    fillColor : "rgba(151,187,205,0.5)",

                    strokeColor : "rgba(151,187,205,1)",

                    data : [<?php echo $listrepdiplome; ?>]

                }

            ]

        }

        var myNewChart = new Chart(ctx).Bar(data); 

        

        var ctx = $("#typeexercice").get(0).getContext("2d");

        var data = [

            {

                value: <?php echo $exercicePro_Omni; ?>,

                color:"#428bca"

            },

            {

                value : <?php echo $exercicePro_ChirBuc; ?>,

                color : "#D51D2A"

            },

            {

                value: <?php echo $exercicePro_Paro; ?>,

                color: "#d9534f"

            },

            {

                value : <?php echo $exercicePro_Endo; ?>,

                color : "#f0ad4e"

            },

            {

                value: <?php echo $exercicePro_Ortho; ?>,

                color:"#5bc0de"

            },

            {

                value : <?php echo $exercicePro_Hospi; ?>,

                color : "#999"

            },

            {

                value : <?php echo $exercicePro_Autre; ?>,

                color : "#5cb85c"

            }

        ]

        var myNewChart = new Chart(ctx).Pie(data);  

        

        var ctx = $("#Tnburgencesmed").get(0).getContext("2d");

        var data = {

            labels : ["Angor","Infarctus","hypertension","dissection","arretcardiaque","cardiaque_autre","asthme","inhalation","quincke","OAP","embolie","resp_autre","urticaire","anaphylaxie","allergie_autre","epilepsie","tetanie","convultion_autre","vagal","hypoglycemie","AVC","coma","ISA","anesthesie","conscience_autre"],

            datasets : [

                {

                    fillColor : "rgba(151,187,205,0.5)",

                    strokeColor : "rgba(151,187,205,1)",

                    data : [<?php echo $Tnb_angor.','.$Tnb_infarctus.','.$Tnb_hypertension.','.$Tnb_dissection.','.$Tnb_arretcardiaque.','.$Tnb_cardiaque_autre.','.$Tnb_asthme.','.$Tnb_inhalation.','.$Tnb_quincke.','.$Tnb_OAP.','.$Tnb_embolie.','.$Tnb_resp_autre.','.$Tnb_urticaire.','.$Tnb_anaphylaxie.','.$Tnb_allergie_autre.','.$Tnb_epilepsie.','.$Tnb_tetanie.','.$Tnb_convultion_autre.','.$Tnb_vagal.','.$Tnb_hypoglycemie.','.$Tnb_AVC.','.$Tnb_coma.','.$Tnb_ISA.','.$Tnb_anesthesie.','.$Tnb_conscience_autre; ?>]

                }

            ]

        }

        var myNewChart = new Chart(ctx).Bar(data); 

        

<?php

ksort($nbUrgPerDoctor);

$listnburg='';

$listnbprat='';

$cumulative=0;

foreach($nbUrgPerDoctor as $key => $val){

    $listnburg.='"'.$key.'",';

    //$cumulative+=$val;

    if($key!=0){

        $listnbprat.=intval($val+$cumulative).',';

    }else{

        $listnbprat.=intval($val).',';

    }

}

$listnburg=substr($listnburg, 0, -1);

$listnbprat=substr($listnbprat, 0, -1);

?> 

        var ctx = $("#nburgencesperprat").get(0).getContext("2d");

        var data = {

            labels : [<?php echo $listnburg; ?>],

            datasets : [

                {

                    fillColor : "rgba(151,187,205,0.5)",

                    strokeColor : "rgba(151,187,205,1)",

                    data : [<?php echo $listnbprat; ?>]

                }

            ]

        }

        var myNewChart = new Chart(ctx).Bar(data);

        

        var ctx = $("#diag_trt_urgences").get(0).getContext("2d");

        var data = {

            labels : ["Angor-Infarctus","hypertension","dissection","arretcardiaque","asthme","inhalation","quincke","OAP","embolie","urticaire","anaphylaxie","epilepsie","tetanie","vagal","hypoglycemie","AVC","ISA","anesthesie"],

            datasets : [

                {

                    fillColor : "rgba(188, 227, 191, 0.71)",

                    strokeColor : "rgb(53, 212, 77)",

                    pointColor : "rgb(53, 212, 77)",

                    pointStrokeColor : "#fff",

                    data : [<?php echo $Tdiag_angor.','.$Tdiag_hypertension.','.$Tdiag_dissection.','.$Tdiag_arretcardiaque.','.$Tdiag_asthme.','.$Tdiag_inhalation.','.$Tdiag_quincke.','.$Tdiag_OAP.','.$Tdiag_embolie.','.$Tdiag_urticaire.','.$Tdiag_anaphylaxie.','.$Tdiag_epilepsie.','.$Tdiag_tetanie.','.$Tdiag_vagal.','.$Tdiag_hypoglycemie.','.$Tdiag_AVC.','.$Tdiag_ISA.','.$Tdiag_anesthesie; ?>]

                },

                {

                    fillColor : "rgba(151,187,205,0.5)",

                    strokeColor : "rgba(151,187,205,1)",

                    pointColor : "rgba(151,187,205,1)",

                    pointStrokeColor : "#fff",

                    data : [<?php echo $Ttrt_angor.','.$Ttrt_hypertension.','.$Ttrt_dissection.','.$Ttrt_arretcardiaque.','.$Ttrt_asthme.','.$Ttrt_inhalation.','.$Ttrt_quincke.','.$Ttrt_OAP.','.$Ttrt_embolie.','.$Ttrt_urticaire.','.$Ttrt_anaphylaxie.','.$Ttrt_epilepsie.','.$Ttrt_tetanie.','.$Ttrt_vagal.','.$Ttrt_hypoglycemie.','.$Ttrt_AVC.','.$Ttrt_ISA.','.$Ttrt_anesthesie; ?>]

                }

            ]

        }

        var options_Radar = {            

            //Boolean - If we show the scale above the chart data			

            scaleOverlay : false,

            

            //Boolean - If we want to override with a hard coded scale

            scaleOverride : true,

            //** Required if scaleOverride is true **

            //Number - The number of steps in a hard coded scale

            scaleSteps : 4,

            //Number - The value jump in the hard coded scale

            scaleStepWidth : <?php echo $nbparticipants/4 ?>,

            //Number - The centre starting value

            scaleStartValue : 0,

            

            //Boolean - Whether to show lines for each scale point

            scaleShowLine : true,

        

            //String - Colour of the scale line	

            scaleLineColor : "rgba(0,0,0,.1)",

            

            //Number - Pixel width of the scale line	

            scaleLineWidth : 1,

        

            //Boolean - Whether to show labels on the scale	

            scaleShowLabels : false,

            

            //Interpolated JS string - can access value

            scaleLabel : "<%=value%>",

            

            //String - Scale label font declaration for the scale label

            scaleFontFamily : "'Arial'",

            

            //Number - Scale label font size in pixels	

            scaleFontSize : 12,

            

            //String - Scale label font weight style	

            scaleFontStyle : "normal",

            

            //String - Scale label font colour	

            scaleFontColor : "#666",

            

            //Boolean - Show a backdrop to the scale label

            scaleShowLabelBackdrop : true,

            

            //String - The colour of the label backdrop	

            scaleBackdropColor : "rgba(255,255,255,0.75)",

            

            //Number - The backdrop padding above & below the label in pixels

            scaleBackdropPaddingY : 2,

            

            //Number - The backdrop padding to the side of the label in pixels	

            scaleBackdropPaddingX : 2,

            

            //Boolean - Whether we show the angle lines out of the radar

            angleShowLineOut : true,

            

            //String - Colour of the angle line

            angleLineColor : "rgba(0,0,0,.1)",

            

            //Number - Pixel width of the angle line

            angleLineWidth : 1,			

            

            //String - Point label font declaration

            pointLabelFontFamily : "'Arial'",

            

            //String - Point label font weight

            pointLabelFontStyle : "normal",

            

            //Number - Point label font size in pixels	

            pointLabelFontSize : 12,

            

            //String - Point label font colour	

            pointLabelFontColor : "#666",

            

            //Boolean - Whether to show a dot for each point

            pointDot : true,

            

            //Number - Radius of each point dot in pixels

            pointDotRadius : 3,

            

            //Number - Pixel width of point dot stroke

            pointDotStrokeWidth : 1,

            

            //Boolean - Whether to show a stroke for datasets

            datasetStroke : true,

            

            //Number - Pixel width of dataset stroke

            datasetStrokeWidth : 2,

            

            //Boolean - Whether to fill the dataset with a colour

            datasetFill : true,

            

            //Boolean - Whether to animate the chart

            animation : true,

        

            //Number - Number of animation steps

            animationSteps : 60,

            

            //String - Animation easing effect

            animationEasing : "easeOutQuart",

        

            //Function - Fires when the animation is complete

            onAnimationComplete : null

            

        }

        var myNewChart = new Chart(ctx).Radar(data,options_Radar);

    

        var ctx = $("#support_formation").get(0).getContext("2d");

        var data = [

            {

                value: <?php echo $supFormation['video']; ?>,

                color:"#428bca"

            },

            {

                value : <?php echo $supFormation['livre']; ?>,

                color : "#D51D2A"

            },

            {

                value: <?php echo $supFormation['fiches']; ?>,

                color: "#d9534f"

            }

        ]

        var myNewChart = new Chart(ctx).Pie(data);  

        

        var ctx = $("#Tnburgencesmed").get(0).getContext("2d");

        var data = {

            labels : ["Angor","Infarctus","hypertension","dissection","arretcardiaque","cardiaque_autre","asthme","inhalation","quincke","OAP","embolie","resp_autre","urticaire","anaphylaxie","allergie_autre","epilepsie","tetanie","convultion_autre","vagal","hypoglycemie","AVC","coma","ISA","anesthesie","conscience_autre"],

            datasets : [

                {

                    fillColor : "rgba(151,187,205,0.5)",

                    strokeColor : "rgba(151,187,205,1)",

                    data : [<?php echo $Tnb_angor.','.$Tnb_infarctus.','.$Tnb_hypertension.','.$Tnb_dissection.','.$Tnb_arretcardiaque.','.$Tnb_cardiaque_autre.','.$Tnb_asthme.','.$Tnb_inhalation.','.$Tnb_quincke.','.$Tnb_OAP.','.$Tnb_embolie.','.$Tnb_resp_autre.','.$Tnb_urticaire.','.$Tnb_anaphylaxie.','.$Tnb_allergie_autre.','.$Tnb_epilepsie.','.$Tnb_tetanie.','.$Tnb_convultion_autre.','.$Tnb_vagal.','.$Tnb_hypoglycemie.','.$Tnb_AVC.','.$Tnb_coma.','.$Tnb_ISA.','.$Tnb_anesthesie.','.$Tnb_conscience_autre; ?>]

                }

            ]

        }

        var myNewChart = new Chart(ctx).Bar(data);

        

        var ctx = $("#prst_utl_urgences").get(0).getContext("2d");

        var data = {

            labels : ["Oxygene","DSA","Tensiometre","BAVU","Canule","IM-SC","IV","Adrenaline","trinitrine","glucagon","salbutamol"],

            datasets : [

                {

                    fillColor : "rgba(230, 206, 191, 0.8)",

                    strokeColor : "rgb(209, 162, 74)",

                    pointColor : "rgb(185, 118, 12)",

                    pointStrokeColor : "#fff",

                    data : [<?php echo $Tprst_oxygene.','.$Tprst_DSA.','.$Tprst_tensiometre.','.$Tprst_BAVU.','.$Tprst_canule.','.$Tprst_IM.','.$Tprst_IV.','.$Tprst_adrenaline.','.$Tprst_trinitrine.','.$Tprst_glucagon.','.$Tprst_salbutamol; ?>]

                },

                {

                    fillColor : "rgba(205, 151, 151, 0.5)",

                    strokeColor : "rgb(198, 116, 116)",

                    pointColor : "rgb(178, 47, 47)",

                    pointStrokeColor : "#fff",

                    data : [<?php echo $Tutl_oxygene.','.$Tutl_DSA.','.$Tutl_tensiometre.','.$Tutl_BAVU.','.$Tutl_canule.','.$Tutl_IM.','.$Tutl_IV.','.$Tutl_adrenaline.','.$Tutl_trinitrine.','.$Tutl_glucagon.','.$Tutl_salbutamol; ?>]

                }

            ]

        }

        var myNewChart = new Chart(ctx).Radar(data,options_Radar);

    });

  </script>

</body>

</html>