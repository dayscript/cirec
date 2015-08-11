<?php

/**
 * Loads additional template files.
 */
function _cirec_load() {
  $themepath = drupal_get_path('theme', 'cirec');
  include $themepath . '/inc/form.inc';
}

_cirec_load();


/**
 * Implements template_preprocess_html().
 */
function cirec_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function cirec_preprocess_page(&$variables) {

    // Convenience variables.
    if (!empty($variables['page']['sidebar_first'])) {
      $left = $variables['page']['sidebar_first'];
    }

    if (!empty($variables['page']['sidebar_second'])) {
      $right = $variables['page']['sidebar_second'];
    }

    // Dynamic sidebars.
    if (!empty($left) && !empty($right)) {
      $variables['main_grid'] = 'medium-8 medium-push-8';
      $variables['sidebar_first_grid'] = 'medium-8 medium-pull-8';
      $variables['sidebar_sec_grid'] = 'medium-8';
    }
    elseif (empty($left) && !empty($right)) {
      $variables['main_grid'] = 'medium-16';
      $variables['sidebar_first_grid'] = '';
      $variables['sidebar_sec_grid'] = 'medium-8';
    }
    elseif (!empty($left) && empty($right)) {
      $variables['main_grid'] = 'medium-16 medium-push-8';
      $variables['sidebar_first_grid'] = 'medium-8 medium-pull-16';
      $variables['sidebar_sec_grid'] = '';
    }
    else {
      $variables['main_grid'] = '';
      $variables['sidebar_first_grid'] = '';
      $variables['sidebar_sec_grid'] = '';
    }
}

/**
 * Implements template_preprocess_node.
 */
function cirec_preprocess_node(&$variables) {
}

