<?php
/*
Title: WP Legal Cases Settings
Setting: cases_settings
*/

piklist('field', array(
  'type' => 'textarea'
  ,'field' => 'cases_custom_css'
  ,'label' => __('Custom CSS')
  ,'description' =>__('Customize the look of your cases with CSS')
  ,'columns' =>'10'
  
  ,'attributes' => array(
  'class' => 'text'
  )
 ));
 
 piklist('field', array(
	'type'=>'radio'
	,'field' =>'cases_credit_link'
	,'label' =>__('Display Credit Link?')
	,'help' => __('Let the world know you use WP Legal Cases by showing a small link in the footer of your site. Thanks.')
	,'attributes' => array(
		'class' =>'text'
		)
	,'choices' =>array(
		'yes' =>__('Display the link.')
		,'no' =>__('Do not display the link.')
		)
	,'value' => 'no'
		));