<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function bootstrap_menu_tree__menu_front_menu(&$variables) {
  return '<div class="row">' . $variables['tree'] . '</div>';
}

function angole_menu_link__menu_front_menu($variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = '<h3>' . l($element['#title'], $element['#href'], $element['#localized_options']) . '</h3>';
  $output .= '<div class="cardbody">' . $element['#original_link']['localized_options']['attributes']['title'] . '</div>';
  return '<div class="col col-sm-4"><div class="final-card">' . $output . $sub_menu . "</div></div>\n";
}

