<?php 

function jody_form_system_theme_settings_alter(&$form, $form_state) {
  $form['smart'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Smart Sites Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
   
  $form['smart']['donation_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Donation URL'),
    '#description' => t('Link to donate page used in header and block sitewide'),
    '#default_value' => theme_get_setting('donation_url'),
  );

  $form['smart']['donation_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Donation Text'),
    '#description' => t('Text shown on large donation block (i.e. Help Me Reach Our American Youth)'),
    '#default_value' => theme_get_setting('donation_text'),
  );

  $form['smart']['donation_text2'] = array(
    '#type' => 'textfield',
    '#title' => t('Additional Donation Text'),
    '#description' => t('Smaller donation text shown next to content listing'),
    '#default_value' => theme_get_setting('donation_text2'),
  );

}
