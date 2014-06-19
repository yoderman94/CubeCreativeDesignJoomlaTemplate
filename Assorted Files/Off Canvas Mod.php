<?php

//This needs tweaking to work properly
 function modChrome_CCD_Menu_Off_Canvas( $module, &$params, &$attribs )
{
	if ($module->content)
	{	
		
		echo "<div class=\"visible-sm visible-md visible-lg\">";
			echo "<div class=\"navbar " . htmlspecialchars($params->get('moduleclass_sfx')) . " \" role=\"navigation\">";
				echo $module->content;
			echo "</div>"; //End navbar
		echo "</div>"; //End visible
		
		echo "<div class=\" visible-xs\">";
			echo "<div class=\"navbar " . htmlspecialchars($params->get('moduleclass_sfx')) . " \" role=\"navigation\">";
				echo "<div class=\"container\">";
					echo "<div class=\"navbar-header\">";
          				echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"offcanvas\" data-target=\".navbar-collapse\">";
							//echo "<span class=\"sr-only\">Toggle navigation</span>";
							echo "<div class=\"pull-left\" style=\"padding-left: 30px; margin-top: -4px;\">Menu</div>";
							echo "<span class=\"icon-bar\"></span>";
							echo "<span class=\"icon-bar\"></span>";
							echo "<span class=\"icon-bar\"></span>";
						echo "</button>";
          				echo "<a class=\"navbar-brand mod_title\" href=\"#\">" . $module->title . "</a>";		  
       				echo "</div>"; //End Navbar-header
				echo "</div>"; //End container
			//echo "<div class=\"navbar-collapse offcanvas\">";
			echo "<div class=\"col-xs-6 col-sm-3 sidebar-offcanvas showhide navbar-collapse\" id=\"sidebar\" role=\"navigation\" >";
				echo "<div class=\"sidebar-nav\">";
					echo $module->content;
				echo "</div>"; //End Sidebar Nav	
			echo "</div>"; //End Sidebar-offcanvas
      		echo "</div>"; //End Navbar
	    echo "</div>"; //End XS
		
	}
}
?>