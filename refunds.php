<?php session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("dbConn/dbConn.php");
include("Controllers/common.functions.php");
include("Controllers/security.php");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Refunds and Cancellations- Online Admission Portal - OFJC</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="description" content="Online Admission Portal of Orient Flower Junior College, Biswanath Chariali " />
	<meta name="author" lang="en" content="Victor Borah, Biswanath Chariali" />	
	<meta name="keywords" content="Admission, Admission Portal, Online Admission" />
	<meta content='document' name='resource-type'/>
	<meta content='all' name='robots'/>
	<meta content='en' name='language'/>
	<meta content='IN' name='country'/>
	<meta content='victorborah@gmail.com' name='Email'/>
	<meta content='global' name='distribution'/>
	<meta content='5 days' name='revisit'/>
	<meta content='5 days' name='revisit-after'/>	
	<meta http-equiv="cache-control" content="max-age=0" /> 
	<meta http-equiv="cache-control" content="no-cache" /> 
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" /> 
	<meta http-equiv="pragma" content="no-cache" /> 
	<meta http-equiv="expires" content="0" /> 
	
	
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Online Admission Portal - OFJC" />
	<meta property="og:description" content="Online Admission Portal of Orient Flower Junior College, Biswanath Chariali, Biswanath, Assam" />
	<meta property="og:url" content="https://admissions.orientflower.in" />
	<meta property="og:site_name" content="Online Admission Portal - OFJC" />
	<meta property="og:image" content="https://admissions.orientflower.in/img/OFJC_Social_Share_Image.jpg" />
	<meta property="og:image:secure_url" content="https://admissions.orientflower.in/img/OFJC_Social_Share_Image.jpg" />
	<meta property="og:image:width" content="1640" />
	<meta property="og:image:height" content="624" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Orient Flower Junior College, Biswanath, Assam" />
	<meta name="twitter:title" content="Orient Flower Junior College" />
	<meta name="twitter:image" content="https://admissions.orientflower.in/img/OFJC_Social_Share_Image.jpg" />
	
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />  
	<link rel="apple-touch-icon" sizes="57x57" href="img/AppIcons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/AppIcons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/AppIcons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/AppIcons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/AppIcons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/AppIcons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/AppIcons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/AppIcons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/AppIcons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/AppIcons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/AppIcons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/AppIcons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/AppIcons/favicon-16x16.png">	
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
	<link rel="stylesheet" type="text/css" id="theme" href="css/theme-black.css"/>	 	       
	<link rel="stylesheet" type="text/css" href="Plugins/noty/lib/noty.css"/>                                          
	<link rel="stylesheet" type="text/css" href="Plugins/noty/lib/themes/mint.css"/>                                          
	<link rel="stylesheet" type="text/css" href="Plugins/noty/lib/themes/nest.css"/>  
	<link rel="stylesheet" type="text/css" href="Plugins/steps/jquery.steps.css"/> 
	<link href="Plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">   
	
	<link href="Plugins/bootstrapFileInput/css/fileinput.min.css" rel="stylesheet">   
	<link href="Plugins/bootstrapFileInput/css/fileinput-rtl.min.css" rel="stylesheet">   
    
	
	
	<link type="text/css" rel="stylesheet" href="Plugins/PickaDate/themes/classic.css" media="screen and (min-device-width: 768px)" />
	<link type="text/css" rel="stylesheet" href="Plugins/PickaDate/themes/classic.date.css" media="screen and (min-device-width: 768px)"/>
	<link type="text/css" rel="stylesheet" href="Plugins/PickaDate/themes/default.css" media="screen and (max-device-width: 480px)" />
	<link type="text/css" rel="stylesheet" href="Plugins/PickaDate/themes/classic.date.css" media="screen and (max-device-width: 480px)"/>
	
	
	<link rel="stylesheet" type="text/css" id="theme" href="css/daterangepicker_custom.css"/>  
	<link rel="stylesheet" type="text/css" href="Plugins/waitMe/waitMe.css" >	
	<link rel="stylesheet" type="text/css" id="theme" href="Menu/app.menu.css"/>     
	<link rel="stylesheet" type="text/css" id="theme" href="css/custom.css"/>	  
</head>
<body>

	 <div id="appBx" class="row w-100 ">
		 <div class="row w-100">
			<div class="row w-100 text-center justify-content-center align-self-center appTitle">  
				<div class="col-xs-12 w-100"><img src="img/logo.png" /></div>
				<div class="col-xs-12 w-100 no-margin no-padding"><span class="clgname">ORIENT FLOWER JUNIOR COLLEGE</span></div>
				<div class="col-xs-12 w-100 no-margin no-padding"><span class="clgAddLine1">KOCHGAON</span></div>
				<div class="col-xs-12 w-100 no-margin no-padding"><span class="clgAddLine2">BISWANATH, ASSAM, PIN: 784 176</span></div>
			</div>  
		 </div>
		  
		  <div class="row w-100 no-padding">
				<div class="col-xs-12 w-100 no-padding"><?php include('Menu/menu.php');?></div>
		 </div>
		  
		  
		  <div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 ">
				<div class="row">
					<h3>Refunds and Cancellations</h3>
					<br>																
					<?php include('Modules/Refunds_Module.php'); ?>
					
				</div>
			</div>
			
			<div class="col-xs-12 text-center justify-content-center align-self-center " style="margin-top:15px;">
				<a href="./" title="Admission Portal Home">Home</a>&nbsp;|&nbsp;<a href="terms" title="Terms and conditions">Terms &amp; Conditions</a>&nbsp;|&nbsp;<a href="refunds" title="Terms and conditions">Cancellations &amp; Refunds</a>
			</div>
			
		  </div>
		  
		  <div class="row w-100 text-center justify-content-center align-self-center txt-center">		  
		    		 
		  </div>
		 









		 <div class="row w-100">
			<div class="col-12 appBx footerBox" >
				<span id="footTitle">Online Admission Portal</span><br>
				<b>&copy; Orient Flower Jr. College, <?php echo date('Y');?></b><br>
				<b>Kochgaon, Biswanath, 784176</b>			
			</div>	
		 </div>
		 
		 
		 
	 </div>




	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio> 
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>	
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="Plugins/steps/jquery.steps.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script src="Plugins/mojs/mo.min.js"></script>
	<script src="Plugins/noty/demo/bouncejs/bounce.js" type="text/javascript"></script>	
	<script src='Plugins/noty/lib/noty.min.js' type='text/javascript'></script>
	<script src="Plugins/bootbox/bootbox.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>  
	<script src="Plugins/validate/jquery.validate.min.js"></script>
	<script src="Plugins/waitMe/waitMe.min.js"></script>	
	<script src="Plugins/moment/min/moment.min.js"></script>
    <script src="Plugins/bootstrap-daterangepicker/daterangepicker.js"></script>	
	<script src="Plugins/PickaDate/picker.js"></script>
	<script src="Plugins/PickaDate/picker.date.js"></script>
	<script src="Plugins/bootstrapFileInput/js/plugins/piexif.min.js"></script>
	<script src="Plugins/bootstrapFileInput/js/plugins/sortable.min.js"></script>
	<script src="Plugins/bootstrapFileInput/js/fileinput.min.js"></script>
	<script src="Plugins/bootstrapFileInput/themes/explorer/theme.min.js"></script>
	<script type="text/javascript" src="js/actions.js"></script> 	 
	<script src="js/ofjc.onlineAdm.js?v=<?php echo filemtime('js/ofjc.onlineAdm.js');?>"></script>  			
	<script>
		(function($){
		  var menuOpen=false;
		  var ico = $('<i class="fa fa-caret-right"></i>');
		  $('nav#menu li:has(ul) > a').append(ico);
		  
		  $('nav#menu li:has(ul)').on('click',function(){
			$(this).toggleClass('open');	
		  });
		  
		  $('a#toggle').on('click',function(e){
			$('html').toggleClass('open-menu');
			menuOpen=true;
			return false;
		  });
		  
		  
		  $('div#overlay').on('click',function(){
			$('html').removeClass('open-menu');
			menuOpen=false;
		  });
		  
		  
		 
		  $('#content').on('mouseup',function(){  
			  if(menuOpen)
			  {
				   $('html').removeClass('open-menu');
				   menuOpen=false;
			  }
			  
		  });
		  
		  
		  
		  
		})(jQuery)
	</script>  
	
	
</body>