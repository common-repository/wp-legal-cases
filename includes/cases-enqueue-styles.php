<?php

function cases_enqueue_styles(){

wp_register_style ('normalize', plugins_url('wp-legal-cases/css/normalize.css'));
wp_enqueue_style ('normalize');

wp_register_style ('foundation', plugins_url('wp-legal-cases/css/foundation.min.css'));
wp_enqueue_style ('foundation');
}

//if('case' === get_post_type()) {
add_action ('wp_enqueue_scripts','cases_enqueue_styles');
//}