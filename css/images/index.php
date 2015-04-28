<?PHP
//INCLUDES
Include("class_html.php");
Include("tablefunction.php");
Include("func.php");
INCLUDE("func_date.php");
include("catchlogin.php");
include("mysql_class.php");
include("action.php");
$MainOutput = New HTML();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Quebec Natation</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico?cb=2" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="STYLESHEET" type="text/css" href="fonts.css" media="all">
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
		<script src="js/png-fix.js" type="text/javascript"></script>
	<![endif]-->
	
	<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Futura.font.js" type="text/javascript"></script>
	<script src="js/jquery-fns.js" type="text/javascript"></script>
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Page -->
	<div id="page">
		<!-- Shell -->
		<div class="shell">
			<!-- Header -->
			<div id="header">
				<!-- Logo -->
                     <?PHP
                        if(!get_variable("Tempete")){
                            	echo "<h1 id=\"logo\" class=\"fl notext\"><a href=\"#\">Quebec Natation</a></h1>";
                        }else{
                            	echo "<h1 id=\"logotempete\" class=\"fl notext\"><a href=\"#\">Quebec Natation</a></h1>";
                        }
                         ?>
			
				<!-- END Logo -->
				
				<!-- Navigation -->
				<div id="navigation">
					<ul>
					 <?PHP
                        if(isset($_COOKIE['isMoniteur']) and $_COOKIE['isMoniteur']){
                            include('topmenumoniteur.php');
                        }elseif(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
                            include('topmenuadmin.php');
                        }else{
                            include('topmenu.php') ;
                        }
                         ?>
					</ul>
				</div>
				<!-- END Navigation -->
				<div class="cl">&nbsp;</div>
			</div>
			<!-- END Header -->
			
			<!-- Content -->
			<div id="content">
				<!-- Mainbox -->
				<div class="mainbox">
					<div class="mainbox-t notext">&nbsp;</div>
					<div class="mainbox-cnt">
					<?PHP

            if(isset($_GET['Section'])){
                include("section.php");
               }elseif(isset($_POST['Section'])){
               $_GET['Section'] = $_POST['Section'];
                   include("section.php");
               }else{

		$_GET['Section']="Accueil";
                include("section.php");
               }


        echo $MainOutput->Send(1);
    ?>
					</div>
					<div class="mainbox-b notext">&nbsp;</div>
				</div>
				<!-- END Mainbox -->
				
				<!-- Bottom Content -->
				<div class="bottom-content">
					<div class="cl">&nbsp;</div>
					<!-- Short Box -->
					<div class="shortbox fl">
						<div class="box-t notext">&nbsp;</div>
						<div class="box-cnt">
                                                <?PHP include('trucdelasemaine.php') ?>
						</div>
						<div class="box-b notext">&nbsp;</div>
					</div>
					<!-- END Short Box -->
					
					<!-- Sidebar -->
					<div class="sidebar fr">
					
                                            <!-- Subscribe -->
                                            <div class="facebook">
                                            <div class="form">    
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/Qu%C3%A9bec-Natation/350622478305873" data-width="292" data-colorscheme="light" data-show-faces="true" data-stream="false" data-header="true"></div>
						<!-- END Subscribe -->
                                                </div></div>
                                               
					</div>
					<!-- END Sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- END Bottom Content -->
			</div>
			<!-- END Content -->
			<!-- Footer Push -->
			<div class="footer-push notext">&nbsp;</div>
			<!-- END Footer Push -->
		</div>
		<!-- END Shell -->
	</div>
	<!-- END Page -->
	<!-- Footer -->
	<div id="footer">
		<p class="ac">QuebecNatation© 2010 </p>
	</div>
	<!-- END Footer -->
	<script type="text/javascript">Cufon.now();</script>
</body>
</html>