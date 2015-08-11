<?php

/**
 * Implements hook_form_alter().
 */
function cirec_form_alter(&$form, &$form_state, $form_id) {
  // Search Block Fixes
  // Modificación de clases predetermidadas de Foundation /zurb_foundation/inc/form.inc
  if (isset($form['#form_id']) && ($form['#form_id'] == 'search_block_form')) {
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
    $form['search_block_form']['#prefix'] = '<div class="search-form cf"><div class="search-input fleft">';
    // $form['search_block_form']['#size'] = 40;
    $form['search_block_form']['#suffix'] = '</div>';

    $form['actions']['submit']['#attributes']['class'] []= 'postfix';
    $form['actions']['submit']['#attributes']['class'] []= 'expand';
    $form['actions']['submit']['#prefix'] = '<div class="search-submit fleft">';
    $form['actions']['submit']['#suffix'] = '</div></div>';
  }
}


