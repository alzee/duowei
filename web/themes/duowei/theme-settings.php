<?php

/**
 * @file
 * Theme settings form for duowei theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function duowei_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['duowei'] = [
    '#type' => 'details',
    '#title' => t('duowei'),
    '#open' => TRUE,
  ];

  $form['duowei']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
