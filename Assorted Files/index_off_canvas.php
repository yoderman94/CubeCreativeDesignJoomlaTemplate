<?php
/**
 * Date         February 2014
 * Copyright    Copyright (C) 2013 Cube Creative
 * License		GPL
 * Default Bootstrap Template for Joomla 3.2
 * Bootstrap Version:  3.1.0
 * Template Version: 2.10
 * 2.8 Upgraded Bootstrap to 3.1, added Enquire Javascript, remove script for RS Pro at load time
 * 2.6 Upgraded Bootstrap to 3.0.2, Updated template inserts for 3.2
 * 2.5 Upgraded Bootstrap to 3.0.1, added Font Awesome 4.0 and Social Buttons 1.0
 * 2.3 Fixed Template to work with WidgetKit 2.5
 * 2.2 Fixed Bug with menu on mobile sizes, added hover for desktop size,and changed size of mobile flyout
 * 2.0 Update to Bootstrap 3.0
 */
 
('_JEXEC') or die; //ensures that file is not accessed directly for security reasons
$app = JFactory::getApplication(); //initializes a variable $app, which can be used to grab various Joomla template parameters such as Site name
$doc = JFactory::getDocument(); //Returns a reference to the global document object, only creating it if it doesn't already exist. The object returned will be of type JDocument. 

$BaseURL = $this->baseurl;
$Template = $this->template;
$BaseURL_Link = $BaseURL."/templates/".$Template;
$Template_link = "templates/".$Template;

$LogoText = $this->params->get('logoText');
$Address = $this->params->get('Address');
$CityStateZip = $this->params->get('CityStateZip');
$PhoneNumber = $this->params->get('PhoneNumber');
$Text_1 = $this->params->get('Text_1');
$Text_2 = $this->params->get('Text_2');

$SiteName = $app->getCfg('sitename');
$Language = $this->language;
$LogoType = $this->params->get('logoType');


// Get the modified time stamp of files
$templatecss = $Template_link."/css/template.css";
$systemcss = "templates/system/css/system.css";
$generalss = "templates/system/css/general.css";
$jqueryjs = $Template_link."/js/jquery.js";
$mainjs = $Template_link."/js/main.js";
$enquiresjs = $Template_link."/js/enquires.min.js";
$bootstrapjs = $Template_link."/js/bootstrap.js";

//Test If file exists and add timestamp
if (file_exists($templatecss)) {
    $templatecss_date = date ("Y-m-d-H-i-s", filemtime($templatecss));
} else { $templatecss_date = "1"; };

if (file_exists($systemcss)) {
    $systemcss_date = date ("Y-m-d-H-i-s", filemtime($systemcss));
} else { $systemcss_date = "1"; };

if (file_exists($generalss)) {
    $generalss_date = date ("Y-m-d-H-i-s", filemtime($generalss));
} else { $generalss_date = "1"; };

if (file_exists($jqueryjs)) {
    $jqueryjs_date = date ("Y-m-d-H-i-s", filemtime($jqueryjs));
} else { $jqueryjs_date = "1"; };

if (file_exists($bootstrapjs)) {
    $bootstrapjs_date = date ("Y-m-d-H-i-s", filemtime($bootstrapjs));
} else { $bootstrapjs_date = "1"; };

if (file_exists($mainjs)) {
    $mainjs_date = date ("Y-m-d-H-i-s", filemtime($mainjs));
} else { $mainjs_date = "1"; };

if (file_exists($enquiresjs)) {
    $enquiresjs_date = date ("Y-m-d-H-i-s", filemtime($enquiresjs));
} else { $enquiresjs_date = "1"; };


//Set Variable Defaults
$slideshow = 0;
$user_1 = 0;
$user_2 = 0;
$user_3 = 0;
$user_4 = 0;

$user1_grid = 4;
$user2_grid = 4;
$user3_grid = 4;
//$user4_grid = 4;

if ($this->countModules('slideshow')) : $slideshow = 1; endif;
if ($this->countModules('user-1')) 	  : $user_1 = 1; endif;
if ($this->countModules('user-2'))    : $user_2 = 1; endif;
if ($this->countModules('user-3'))    : $user_3 = 1; endif;
//if ($this->countModules('user-4'))    : $user_4 = 1; endif;


// Determine the width of User_!, User_2 and User_3
$user_grid = 0;
	
if ($user_1) : $user_grid = $user_grid+4; endif;
if ($user_2) : $user_grid = $user_grid+4; endif;
if ($user_3) : $user_grid = $user_grid+4; endif;
//if ($user_4) : $user_grid = $user_grid+3; endif;

// Add Javascripts to head
JHtml::_('jquery.framework'); //Add defualt for Widgetkit
//JHtml::_('bootstrap.framework');

//unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']);
unset($this->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);//unset to prevent conflicts
unset($this->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);//unset to prevent conflicts

//$doc->addScript($BaseURL_Link . '/js/jquery.js', 'text/javascript'); //Widgetkit doesn't like this
//$doc->addScript($BaseURL_Link . '/js/bootstrap.js', 'text/javascript'); //Adding BS 3 javascript to prevent Menu Bug
//$doc->addScript($BaseURL_Link . '/js/main.js', 'text/javascript');

unset($this->_styleSheets[$BaseURL.'/components/com_rsform/assets/css/front.css']); 
//unset($this->_styleSheets[$this->baseurl .'/components/com_rsform/assets/css/front.css']);

?>

<!DOCTYPE html>
<html xml:lang="<?php echo $Language; ?>" lang="<?php echo $Language; ?>" >
<!--defines xml namespace for the page-->
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="image_src" href="<?php echo $BaseURL_Link ?>/images/img_logo.png" / > <?php /* (114 px tall x 155 px wide) */?>
<?php /* System Styles */?>
<link rel="stylesheet" href="<?php echo $BaseURL ?>/templates/system/css/system.css?version=<?php echo $systemcss_date ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo $BaseURL ?>/templates/system/css/general.css?version=<?php echo $generalss_date ?>" type="text/css" />
<?php /* Load Styles */?>
<link rel="stylesheet" href="<?php echo $BaseURL_Link ?>/css/template.css?version=<?php echo $templatecss_date ?>"  type="text/css">
<?php /* Remove below before final */?>
<link href="css/template.css" rel="stylesheet" type="text/css">
<style type="text/css">
/*** Inline Styles ***/


</style>
</head>
<body>

<div class="container"> 
  <!-- header -->
  <header id="header">
     <?php
	  if ($LogoType == 'image') {	
	  ?>
    <h1 class="center" >
    <a href="index.php" title="<?php echo $SiteName ?>">
    <?php //displays the site name on link alt ?>
    <img src= "<?php echo $BaseURL_Link ?>/images/img_logo.png" width="300" height="165" border="0" alt="<?php echo  $LogoText . " " . $Address . " • " . $PhoneNumber ?>" class="img-responsive" style="margin:0 auto;"  /> </a> </h1>
      <?php
	  } else { 
	  echo "<h1> <a href=\"index.php\" title=\" ".$LogoText. " \">" . $LogoText ."</a></h1> <p>" . $Address . " <br> " . $CityStateZip . " <br> " . $PhoneNumber ."</p> "; 
	  };
	?>
      <jdoc:include type="modules" name="header" style="none" />
   </header>
  <!-- Social Module -->
  <div>
    <jdoc:include type="modules" name="social" style="none" />
  </div>
  <!-- End Social Module -->
</div>
<div class="container">   
  <div class="row row-offcanvas row-offcanvas-right">
      <div class="visible-sm visible-md visible-lg"> <?php /* Visable Small Tablet through Desktops */?>
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <jdoc:include type="modules" name="menu" style="none" /> <?php /* add  navbar-nav to menu class */ ?>
          </div>
        </div>
      </nav>
    </div>
    
    <div class=" visible-xs"> <?php /* Visable Mobile */?>
      <div class="navbar navbar-inverse " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-collapse"><div class="pull-left" style="padding-left: 30px; margin-top: -4px;">Menu</div> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php" title="<?php echo $SiteName ?>"><?php echo $SiteName ?></a> </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 sidebar-offcanvas showhide navbar-collapse" id="sidebar" role="navigation" style="">
        <div class="sidebar-nav">
          <jdoc:include type="modules" name="menu" style="none" /> <?php /* add  navbar-nav to menu class */ ?>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12" <?php /* set the width of Content Container; col-sm-12 sets max col width to 60px */?>>
      <jdoc:include type="modules" name="slideshow" style="none" />
      <?php /* User Grids Section */?>
      <section class="row">
    <?php if($user_1) : ?>
    <div id="user1" class="<?php if ($user_grid == 12) { echo "col-xs-12 col-sm-" . $user1_grid; } elseif ($user_grid == 8){ echo "col-xs-12 col-sm-6"; } else {echo "col-xs-12"; }; ?> ">
      <jdoc:include type="modules" name="user-1" style="none" />
    </div>
    <?php
	 endif; 
	if($user_2) : ?>
    <div id="user2" class="<?php if ($user_grid == 12) { echo "col-xs-12 col-sm-" . $user2_grid; } elseif ($user_grid == 8 and $user1 == 0 ) { echo "col-xs-12 col-sm-6"; } elseif ($user3 == 0 and $user_grid == 8) {echo "col-xs-12 col-sm-6"; } else { echo "col-xs-12"; } ?>">
      <jdoc:include type="modules" name="user-2" style="none" />
    </div>
    <?php
	endif;
	if($user_3) : ?>
    <div id="user3" class="<?php if ($user_grid == 12) { echo "col-xs-12 col-sm-" . $user3_grid; } elseif ($user_grid == 8){ echo "col-xs-12 col-sm-6"; } else {echo "col-xs-12"; }; ?>">
      <jdoc:include type="modules" name="user-3" style="none" />
    </div>
    <?php
    endif;
	// Applies a clear and padding if user_x is true
	if($user_1 or $user_2 or $user_3):
	echo "<div class=\"clear\"></div> ";
	endif;
	?>
  </section>
      <section class="row" id="content">
        <div class="col-xs-12 col-sm-12">
          <jdoc:include type="component" />
        </div>
      </section>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <jdoc:include type="modules" name="position-2" style="none" />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
          <jdoc:include type="modules" name="position-7" style="none" />
        </div>
      </div>
    </div >
    <?php /* End Content Container */?>
  </div>
  <footer id="footer_info">
    <jdoc:include type="modules" name="footer" style="xhtml" />
    <h1></h1>
    <p><?php echo $LogoText ?><br>
	   <?php echo $Address ?><br>
       <?php echo $CityStateZip ?><br>
	   <?php echo $PhoneNumber ?></p>
    <div id="copyright"><br>
      Copyright © <?php echo date(Y) . " " . $LogoText ?><br>
      a <a href="http://cubecreativedesign.com/" title="Cube Creative Design" target="_blank">Cube Creative Design</a> site </div>
  </footer>
  <jdoc:include type="modules" name="debug" style="xhtml" />
  <jdoc:include type="message" />
</div>



<?php /* We Load jQuery 1.10 Here to prevent an issue with the dropdown menus */?>
<script src="<?php echo $BaseURL_Link ?>/js/jquery.js?version=<?php echo $jqueryjs_date ?>"></script> 
<script src="<?php echo $BaseURL_Link ?>/js/main.js?version=<?php echo $mainjs_date ?>"></script> 
<script src="<?php echo $BaseURL_Link ?>/js/enquire.min.js?version=<?php echo $enquiresjs_date ?>"></script>
<script src="<?php echo $BaseURL_Link ?>/js/bootstrap.js?version=<?php echo $bootstrapjs_date?>"></script> <?php /* //Adding BS 3 javascript to prevent Menu Bug */?>


<script type="text/javascript">
<?php /**** Joomla Dropdown Fix ****/
/* http://forum.joomla.org/viewtopic.php?f=706&t=770153  */?>
   (function($){   
    $(document).ready(function(){
     $('.dropdown-toggle').dropdown();
      $('.parent').addClass('dropdown');
	  $('.parent > a').attr('href', "#");
      $('.parent > a').addClass('dropdown-toggle');
      $('.parent > a').attr('data-toggle', 'dropdown');
      $('.parent > a').attr('data-target', '#');
      $('.parent > a').append('<b class="caret"></b>');
	  $('.parent > a').attr('role', 'button');
      $('.parent > ul').addClass('dropdown-menu');
      $('.nav-child .parent').removeClass('dropdown');
      $('.nav-child .parent .caret').css('display', 'none');
      $('.nav-child .parent').addClass('dropdown-submenu');
	  
	  //Javascript Media Query   
	  enquire.register("screen and (max-width: 768px)", {
		setup: function() {
			// Load in content via AJAX (just the once)
		},
		match: function() {
			// Show match above register
		},
		unmatch: function() {
			// Else if its not a match do something
		}
	  });
	  
	  // Place class of userModules row that you want to be equal height
	  // Then reference the class that you want to make all equal, in this case rounded_boxes
	  $('.userModules').each(function(){  
		  var highestBox = 0;
		  $('.rounded_boxes', this).each(function(){
			  if($(this).height() > highestBox) 
				 highestBox = $(this).height(); 
		  });  
		  $('.rounded_boxes',this).height(highestBox);
      });
		
    });
  })(jQuery);
</script>
</body>
</html>