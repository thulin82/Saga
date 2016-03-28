<?php
/**
 * Config-file for Saga. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Saga paths.
 *
 */
define('SAGA_INSTALL_PATH', __DIR__ . '/..');
define('SAGA_THEME_PATH', SAGA_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(SAGA_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Saga variable.
 *
 */
$saga = array();
 
 
/**
 * Site wide settings.
 *
 */
$saga['lang']         = 'sv';
$saga['title_append'] = ' | Saga en webbtemplate';

$saga['header'] = <<<EOD
<img class='sitelogo' src='img/saga.png' alt='Saga Logo'/>
<span class='sitetitle'>Saga webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$saga['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Markus Thulin | <a href='https://github.com/thulin82/Saga'>Saga på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


/**
 * Theme related settings.
 *
 */
$saga['stylesheets'][] = 'css/style.css';
$saga['favicon']    = 'favicon2.ico';


/**
 * Menu related settings.
 *
 */
$saga['menu_items'] = array(
  'index'  => array('text'=>'Start',  'url'=>'index.php'),
  'reports'  => array('text'=>'Rapporter',  'url'=>'reports.php'),
  'source' => array('text'=>'Källkod', 'url'=>'source.php')
);
