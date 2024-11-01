<?

add_filter('piklist_taxonomies', 'cases_type_tax');
 function cases_type_tax($taxonomies)
 {
   $taxonomies[] = array(
      'post_type' => 'case'
      ,'name' => 'case_category'
      ,'show_admin_column' => true
      ,'hide_meta_box' => true
      ,'configuration' => array(
        'hierarchical' => true
        ,'labels' => piklist('taxonomy_labels', 'Case Category')
        ,'show_ui' => true
        ,'query_var' => true
        ,'rewrite' => array( 
          'slug' => 'case-category' 
        )
      )
    );
return $taxonomies;
}