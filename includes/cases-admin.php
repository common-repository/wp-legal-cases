<?php
 add_filter('piklist_admin_pages', 'cases_setting_pages');
  function cases_setting_pages($pages)
  {
  
	  $pages[] = array(
      'page_title' => __('About WP Legal Cases', 'cases')
      ,'menu_title' => 'About'
      ,'capability' => defined('PIKLIST_SETTINGS_CAP') ? PIKLIST_SETTINGS_CAP : 'manage_options'
	  ,'sub_menu' =>'edit.php?post_type=case'
      ,'menu_slug' => 'about_cases'
      ,'single_line' => false
      ,'menu_icon' => piklist_admin::responsive_admin() == true ? plugins_url('piklist/parts/img/piklist-menu-icon.svg') : plugins_url('piklist/parts/img/piklist-icon.png')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
    );
	
     $pages[] = array(
      'page_title' => __('Cases Settings')
      ,'menu_title' => __('Settings', 'piklist')
      ,'sub_menu' => 'edit.php?post_type=case' //Under Appearance menu
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'cases_settings'
      ,'setting' => 'cases_settings'
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      ,'single_line' => true
      ,'default_tab' => 'Basic'
      ,'save_text' => 'Save Settings'
    );
 
    return $pages;
  }
  
