<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function angole_menu_link__menu_front_menu($variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  $output .= '<div class="description">' . $element['#original_link']['localized_options']['attributes']['title'] . '</div>';
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

