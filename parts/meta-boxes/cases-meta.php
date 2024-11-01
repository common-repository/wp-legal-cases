<?php
/*
Title: Case Details
Post Type: case
*/

piklist('field', array(
    'type' => 'text'
    ,'field' => 'case_year'
	,'scope' => 'post_meta'
    ,'label' => __('Year')
    ,'description' => ''
    ,'value' => ''
    
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'case_type'
	,'scope' => 'post_meta'
    ,'label' => __('Type')
    ,'description' => ''
    ,'value' => ''
    ,'help' => __('Enter the type of case. For example: criminal, civil, appeal, etc.')
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
 
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'cases_charges'
	,'scope' => 'post_meta'
 ,'label' => __('Charges')
    ,'description' => __('Enter the charges')
    ,'add_more' =>'true'
    ,'help' => __('Add one charge per box.  Use the + to add more charges.')
    ,'attributes' => array(
      'class' => 'text'
    )
  ));
  
  piklist('field', array(
    'type' => 'select'
    ,'field' => 'cases_verdict'

    ,'label' => __('Verdict')
    ,'description' => __('Select the verdict')
    
    ,'attributes' => array(
      'class' => 'text'
    )
	,'choices' => array(
		'' =>''
		,'guilty' => __('Guilty','cases')
		,'not_guilty'=> __('Not Guilty')
		,'charges_dropped' =>__('Charges Dropped')
		,'case_dismissed' => __('Case Dismissed')
		,'other' => __('Other')
		)
	,'value' => ''
  ));
  
  piklist('field', array(
    'type' => 'text'
    ,'field' => 'cases_other_verdict'
    ,'scope' => 'post_meta'
	,'label' => __('Other Verdict')
    ,'conditions' =>array(
		array(
		'field' =>'cases_verdict'
		,'value' => 'other'
		))
    ,'attributes' => array(
      'class' => 'text'
    )
	 ));
	 
	piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'cases_outcome'
	,'rows' => '5'
	,'columns' => '10'
	,'scope' => 'post_meta'
    ,'label' => __('Outcome')
    ,'description' => __('Enter the sentence or other outcome.')
    ,'conditions' => array(
		array(
			'field'=> 'cases_verdict'
			,'value' => array('guilty','other')
			))
    ,'attributes' => array(
      'class' => 'text'
    )
 
  ));