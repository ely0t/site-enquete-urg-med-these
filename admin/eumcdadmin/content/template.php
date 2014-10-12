<?php
if (!defined('THESE')){
  header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Urgence m&eacute;dicale au cabinet dentaire</title>
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
</head>

<body>
<!-- Header -->
<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="#">Urgence m&eacute;dicale au cabinet dentaire - Administration</a> </div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li <?php echo checkcrt('home',$page) ?>><a href="index.php?page=home"><strong>Messagerie</strong></a></li>
                <li <?php echo checkcrt('mailer',$page) ?>><a href="index.php?page=mailer"><strong>Forcer l'envoi des nouveaux mails</strong></a></li>
                <!-- <li <?php echo checkcrt('mailer',$page) ?>><a href="index.php?page=mailer&amp;recall_all=1"><strong class="red">!! Renvoier tous !!</strong></a></li>--> 
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
<script type="text/javascript">
    jQuery(function ($) {
        $('.btn').button();
        $( document ).ready(
            function() {
                $('input[type="radio"]:checked').parent('label').addClass('active');
            }
        );
        $("input:radio").change( function() {
            $(this).prop('checked', true);    
        });
        $('#popover').popover();
        $('#popover2').popover();
    });
  </script>
</body>
</html>