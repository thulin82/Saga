<?php 

// Include the essential config-file which also creates the $saga variable with its defaults.
include(__DIR__.'/config.php');

// Do it and store it all in variables in the Saga container.
$saga['title'] = "Saga";

// Add style for csource
$saga['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the Saga container.
$saga['title'] = "Visa källkod";
$saga['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

// Finally, leave it all to the rendering phase of Anax.
include(SAGA_THEME_PATH);