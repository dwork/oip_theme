<?php

/**
 * @file
 * Display Suite Classic Flyer configuration.
 */

function ds_classic_flyer() {
  return array(
    'label' => t('Classic Flyer'),
    'regions' => array(
      'header' => t('Header'),
      'left' => t('Left'),
      'right' => t('Right'),
      'footer' => t('Footer'),
    ),
    // Uncomment if you want to include a CSS file for this layout (classic_flyer.css)
    'css' => TRUE,
    // Uncomment if this is a template for a node form.
    // 'form' => TRUE,
  );
}
