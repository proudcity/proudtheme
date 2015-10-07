<?php

require_once dirname(__FILE__) . '/includes/form.inc';
require_once dirname(__FILE__) . '/includes/panel.inc';


/**
 * Implements template_preprocess_html().
 *
 */
//function proud_base_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}


/**
 *
 * Implements template_prerocess_page().
 */
function proud_base_preprocess_page(&$vars) {

  // If panels arent being used at all.
  $vars['no_panels'] = !(module_exists('page_manager') && page_manager_get_current_page());
  $vars['copyright'] = '';

  // Add select2
  if (module_exists('libraries')) {
    $path = libraries_get_path('select2');
    drupal_add_js($path . '/select2.min.js');
    drupal_add_css($path . '/select2.css');
  }
}


/**
 * Implements hook_css_alter().
 */
function proud_base_css_alter(&$css) {
 // Always remove base theme CSS.

  $theme_path = 'bootstrapcdn';

  foreach($css as $path => $values) {
   if(strpos($path, $theme_path) > 0) {
     unset($css[$path]);
   }
  }


  // Remove css from datepicker (now included in custom.css)
  unset($css['misc/ui/jquery.ui.datepicker.css']);
  unset($css['misc/ui/jquery.ui.theme.css']);
  unset($css['sites/all/modules/contrib/date/date_popup/themes/datepicker.1.7.css']);
}

/**
 * Implements hook_js_alter().
 */
function proud_base_js_alter(&$js) {
 // Always remove base theme JS.
 $theme_path = 'bootstrapcdn';

 foreach($js as $path => $values) {
   if(strpos($path, $theme_path) > 0) {
     unset($js[$path]);
   }
 }
}
