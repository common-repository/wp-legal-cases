<?php
//Output Custom CSS
$settings = get_option('cases_settings');
if($settings['cases_custom_css']!=''){
add_action( 'wp_head', 'cases_custom_styles' );
}
function cases_custom_styles() {

  echo '<!--WP LEGAL CASES CUSTOM CSS--><style type="text/css">' . "\n";
 $settings = get_option('cases_settings');
	$custom_css = $settings['cases_custom_css'];
	echo $custom_css;
  echo '</style>' . "\n";

}

//Output the Footer Link

function cases_add_credit_link(){
echo '<p class="cases-footer">WP Legal Cases Plugin by <a href="http://shoredavis.com/cases-for-wordpress/" target="_blank">Shore Davis Johnston</a></p>';
}
$settings = get_option('cases_settings');
if ($settings['cases_credit_link'] == 'yes') { 
add_action('wp_footer', 'cases_add_credit_link');
}