<?php
/**
 * @package WordPress
 * @subpackage Voga
 * @since voga
 **/
$_template_path = get_template_directory();
require_once $_template_path."/framework/abstract.php";
$theme = new WdTheme(array(
	'theme_name'	=>	"Voga",
	'theme_slug'	=>	'voga'
));
$theme->init();
require_once ('admin/index.php');
?>