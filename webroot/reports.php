<?php 
/**
 * This is a Saga pagecontroller.
 *
 */
// Include the essential config-file which also creates the $saga variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Saga container.
$saga['title'] = "Redovisning";

$saga['main'] = <<<EOD
<article>
<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<p>Redovisningstext...</p>


<h2>Kmom02: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>


</article>

EOD;

// Finally, leave it all to the rendering phase of Saga.
include(SAGA_THEME_PATH);