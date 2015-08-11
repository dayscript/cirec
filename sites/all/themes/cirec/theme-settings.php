<?php
/**
 * Implements hook_form_FORM_ID_alter().
 * Adding Custom Fields for theme configuration
 */
function cirec_form_system_theme_settings_alter(&$form, &$form_state) {
    $form['cirec'] = array(
      '#type' => 'vertical_tabs',
      '#weight' => -10,
    );

    /*---------------------------------------*
     * Social Networks
     *---------------------------------------*/
    // $form['cirec']['social'] = array(
    //   '#type' => 'fieldset',
    //   '#title' => t('Cirec Social Networks'),
    // );

    // $form['cirec']['social']['fb_link'] = array(
    //     '#type' => 'textfield',
    //     '#title' => t('Enlace a facebook'),
    //     '#default_value' => theme_get_setting('fb_link'),
    //     );

    // $form['cirec']['social']['tw_link'] = array(
    //     '#type' => 'textfield',
    //     '#title' => t('Enlace a twitter'),
    //     '#default_value' => theme_get_setting('tw_link'),
    //     );

    // $form['cirec']['social']['yb_link'] = array(
    //     '#type' => 'textfield',
    //     '#title' => t('Enlace a Youtube'),
    //     '#default_value' => theme_get_setting('yb_link'),
    //     );

    /*---------------------------------------*
     * Settings
     *---------------------------------------*/
    $form['cirec']['settings'] = array(
      '#type' => 'fieldset',
      '#title' => t('Cirec Settings'),
    );

    $form['cirec']['settings']['head_tags'] = array(
        '#type' => 'textarea',
        '#title' => t('Etiquetas HTML que serán añadidas en la etiqueta &lt;head&gt; '),
        '#default_value' => theme_get_setting('head_tags'),
        );

    $form['cirec']['settings']['head_scripts'] = array(
        '#type' => 'textarea',
        '#title' => t('Scripts (JS), que serán añadidos en la etiqueta &lt;head&gt;'),
        '#default_value' => theme_get_setting('head_scripts'),
        '#description' => t('No se deben incluir las etiquetas &lt;script&gt;&lt;/script&gt;'),
        );

    $form['cirec']['settings']['head_css'] = array(
        '#type' => 'textarea',
        '#title' => t('CSS que será añadido en la etiqueta &lt;head&gt;'),
        '#default_value' => theme_get_setting('head_css'),
        '#description' => t('No se deben incluir las etiquetas &lt;style&gt;&lt;/style&gt;'),
        );

}
