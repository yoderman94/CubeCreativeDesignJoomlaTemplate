<?php
defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */
function modChrome_RoundedBoxes( $module, &$params, &$attribs )
{	
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 1;
	
	if ($module->content)
	{
		echo "<div class=\"rounded_boxes" . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle)
		{
			echo "<h" . $headerLevel . " class=\"three-buttons-title " . $params->get('header_class') . " \">" . $module->title . "</h" . $headerLevel . ">";  
		}
			echo "<div class=\"mod_content " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
			echo $module->content;
			echo "</div>";
		echo "</div>";
	}
}


function modChrome_ThreeButtons( $module, &$params, &$attribs )
{
	//Try to get this to work, may be post on forums
	//http://docs.joomla.org/Applying_custom_module_chrome
	
	/*if (isset( $attribs['headerLevel'] )) 
    {
      $headerLevel = $attribs['headerLevel'];
    } else {
      $headerLevel = 3;
    }*/
	
	if ($module->content)
	{
		//echo "<div class=\"three-buttons" . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		echo "<div class=\"three-buttons \">"; //" . htmlspecialchars($params->get('moduleclass_sfx')) . "
		if ($module->showtitle)
		{
			echo "<h1 class=\"three-buttons-title " . htmlspecialchars($params->get('header_class')) . " \"> ";
			echo $module->title;
			echo "</h1>";  
		}
			echo "<div class=\"mod_content " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
			echo $module->content;
			echo "</div>";
		echo "</div>";
		
		
	}
}

function modChrome_CCD_Menu( $module, &$params, &$attribs )
{
	if ($module->content)
	{	
	
		echo "<nav class=\"navbar " . htmlspecialchars($params->get('moduleclass_sfx')) . " \" role=\"navigation\">";
			echo "<div class=\"container\">";
				echo "<div class=\"navbar-header\">";
				  echo "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">";
					//echo "<span class=\"sr-only\">Toggle navigation</span>";
					echo "<div class=\"pull-left\" style=\"padding-left: 30px; margin-top: -4px;\">Menu</div>";
					echo "<span class=\"sr-only\">Toggle navigation</span>";
					echo "<span class=\"icon-bar\"></span>";
					echo "<span class=\"icon-bar\"></span>";
					echo "<span class=\"icon-bar\"></span>";
				  echo "</button>";
				  //echo "<a class=\"navbar-brand mod_title\" href=\"#\">" . $module->title . "</a>";		  
				echo "</div>"; //End navbar-header
				echo "<div class=\"navbar-collapse collapse\">";
				  echo $module->content;
				echo "</div>";
			echo "</div>"; //End container
      echo "</nav>";
		
	}
}
?>