<?php

add_filter('piklist_post_types', 'cases_post_type');
 function cases_post_type($post_types)
 {
  $post_types['case'] = array(
    'labels' => piklist('post_type_labels', 'Cases')
    ,'title' => __('Enter a new Case Title')
    ,'public' => true
    ,'rewrite' => array(
      'slug' => 'cases'
    )
	,'taxonomies' =>array('post_tag')
    ,'supports' => array(
		'title'
      ,'author'
      ,'revisions'
	  ,'editor'
	  ,'thumbnail'
	  
    )
    ,'hide_meta_box' => array(
      'slug'
      
      ,'revisions'
      ,'comments'
      ,'commentstatus'
    )
  );
return $post_types;
}