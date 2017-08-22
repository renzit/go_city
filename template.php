<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function go_city_theme_menu_tree__primary(&$variables) {
  return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}