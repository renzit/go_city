<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function go_city_theme_menu_tree__primary(&$variables) {
  return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}

function go_city_theme_preprocess_page(&$variables){
  $is_front = drupal_is_front_page();
  if($is_front){
     $variables['title'] = 'Go City Montevideo';
  }
}

function go_city_theme_preprocess_html(&$variables){
  $variables['head_title'] = t('Transport for events and travels');
}
