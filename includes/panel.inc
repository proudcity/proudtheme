<?php
/**
 * Implements template_process_panels_add_content_modal().
 */
function proud_base_preprocess_panels_add_content_modal(&$variables) {
  // @todo: do we need this instead (for permissions?)
  //!empty($vars['categories'][$vars['category']]['content']) ? $vars['categories'][$vars['category']]['content'] : array();

  // Process the list of categories.
  $variables['categories_array'] = array();
  foreach ($variables['categories'] as $key => $category_info) {
    // 'root' category is actually displayed under the categories, so
    // skip it.
    if ($key == 'root') {
      continue;
    }

    $class = 'panels-modal-add-category btn btn-sm btn-default';
    if ($key == $variables['category']) {
      $class .= ' active';
    }

    $title = '<i class="fa fa-fw ' . $category_info['icon'] . '"></i> ' . $category_info['title'];

    $url = $variables['renderer']->get_url('select-content', $variables['region'], $key);
    $variables['categories_array'][] = ctools_ajax_text_button($title, $url, '', $class);

    $widget_title = theme('panels_add_content_link', array(
      'renderer' => $vars['renderer'], 
      'region' => $vars['region'], 
      'content_type' => $content[$title],
    ));
  }

  $variables['categories'][$key] = theme('panels_add_content_link', array(
    'renderer' => $vars['renderer'], 
    'region' => $vars['region'], 
    'content_type' => $content[$title],
  ));




}


/**
 * Implements template_preprocess_panels_add_content_link().
 */
/*function radix_preprocess_panels_add_content_link(&$vars) {
  $vars['title'] = filter_xss_admin($vars['content_type']['title']);
  $vars['description'] = isset($vars['content_type']['description']) ? $vars['content_type']['description'] : $vars['title'];
  $vars['icon'] = ctools_content_admin_icon($vars['content_type']);
  $vars['url'] = $vars['renderer']->get_url('add-pane', $vars['region'], $vars['content_type']['type_name'], $vars['content_type']['subtype_name']);

  $icon = theme('image', array('path' => $vars['icon']));
  $title = $icon . ' ' . $vars['title'];
  $button_classes = 'panels-modal-add-config btn btn-default btn-sm';
  $vars['button'] = ctools_ajax_text_button($title, $vars['url'], $vars['description'], $button_classes);

  // If title is Add, assume we are rendering an 'Add' button for preview;
  if ($vars['title'] == t('Add')) {
    $title = '<i class="fa fa-plus"></i> ' . $vars['title'];
    $button_classes = 'panels-modal-add-config btn btn-success btn-sm pull-right';
    $vars['button'] = ctools_ajax_text_button($title, $vars['url'], $vars['description'], $button_classes);
  }
}*/