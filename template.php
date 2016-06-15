<?php

function OIP_views_pre_render(&$view) {

  switch ($view->name) {
    case 'listing_stati':

      // do some logic for your label
      $label = 'My dynamic label';

      // define the label value
      $view->field['php_2']->options['label'] = date('M Y');
      $view->field['php_3']->options['label'] = date('M Y',strtotime("-1 month"));
      $view->field['php_4']->options['label'] = date('M Y',strtotime("-2 month"));
      $view->field['php_5']->options['label'] = date('M Y',strtotime("-3 month"));
      $view->field['php_6']->options['label'] = date('M Y',strtotime("-4 month"));
      $view->field['php_7']->options['label'] = date('M Y',strtotime("-5 month"));

      break;
  }
}
