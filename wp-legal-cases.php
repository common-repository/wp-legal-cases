<?php
/*
Plugin Name: WP Legal Cases
Plugin URI: http://contexta.ca
Donate Link: http://contexta.ca
Description: Designed for law firms using WordPress:  Add a custom post type that highlights your important cases.
Version: 2.0.2
Plugin Type: Piklist
Author:  michaellautman
Author URI: http://lautman.ca
License: GPLv3

*/
//Check For Piklist
add_action('init', 'cases_piklist_checker');
function cases_piklist_checker()
{
  if(is_admin())
  {
   include_once('class-piklist-checker.php');

   if (!piklist_checker::check(__FILE__))
   {
     return;
   }
  }
}
//Register The Cases Post Type
include_once('includes/cases-post-type.php');
//Load The Taxonomies
include_once('includes/register-cases-taxonomies.php');
//Load The Settings Pages
include_once('includes/cases-admin.php');
//Output The Settings Options
include_once('includes/cases-output-settings.php');

/*Load the Appropriate Templates*/
add_filter( 'template_include', 'cases_load_templates' );

function cases_load_templates( $template )
{
 if ( 'case' === get_post_type() && is_single() )
 return dirname( __FILE__ ) . '/templates/single-case.php';
	if ( 'case' === get_post_type() && is_archive())
		return dirname(__FILE__) . '/templates/archive-case.php';

 return $template;
}
//Load The Meta Output
include_once('includes/cases-meta-output.php');

//Load The Styles
//include_once('includes/cases-enqueue-styles.php');
