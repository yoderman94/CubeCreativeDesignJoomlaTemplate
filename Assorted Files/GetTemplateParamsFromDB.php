<?php
$db = JFactory::getDBO(); //Your database object is ready
$sql = "SELECT params FROM `#__template_styles` WHERE `id` = 9 "; //Use id of template
$db->setQuery($sql); 
$db->query();
$row = $db->loadRow();
$json = $row[0];

$arrayExtract = json_decode($json, true); //Extract the json to an array
extract($arrayExtract, EXTR_PREFIX_ALL, "ccd"); //Break up the array to individual variables

echo "<h1>Here we load the ones from the database</h1>";
echo "ccd_logoType " . $ccd_logoType . "<br>";
echo "ccd_logoText " . $ccd_logoText . "<br>";
echo "ccd_Address " . $ccd_Address . "<br>";
echo "ccd_CityStateZip " . $ccd_CityStateZip . "<br>";
echo "ccd_PhoneNumber " . $ccd_PhoneNumber . "<br>";
echo "ccd_Text_1 " . $ccd_Text_1 . "<br>";
echo "ccd_Text_2 " . $ccd_Text_2 . "<br>";

jimport('joomla.filesystem.file');
$params = new JRegistry(JFile::read(JPATH_ROOT . '/templates/cubecreative/templateDetails.xml'));
//$color = $params->get('templateColor');

?>