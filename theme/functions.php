<?php
/**
 * Theme related functions. 
 *
 */
 
/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title) {
  global $saga;
  return $title . (isset($saga['title_append']) ? $saga['title_append'] : null);
}

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function generateMenu($items, $class) {
  $html = "<nav class='$class'>\n";
  foreach($items as $key => $item) {
    $selected = basename($_SERVER['PHP_SELF']) == $item['url'] ? 'selected' : null;
    $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
  }
  $html .= "</nav>\n";
  return $html;
}