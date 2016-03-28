<?php 
/**
 * This is a Saga pagecontroller.
 *
 */
// Include the essential config-file which also creates the $saga variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Saga container.
$saga['title'] = "Saga";
 
$saga['main'] = <<<EOD
<h1>Om mig själv</h1>
<img src="img/me.jpg" class="me" alt="Bild på Markus Thulin">
<p>Jag heter alltså Markus Thulin och bor i Sveriges tredje största stad Malmö tillsammans med fru och hund. Har en treårig ingenjörsexamen bakom mig med inriktning mot Elektroteknik och har sedan de senaste 8 åren jobbat som IT-konsult.</p>
        <p>Trivs väldigt bra med konsultrollen och när jag så sent som i höstas bestämde mig för att byta arbetsgivare så blev det en fortsättning inom konsultbranchen. Variationen är väl det roligaste, då inget uppdrag är det andra likt, och då jag jobbar brett, d.v.s. hellre kunna lite om mycket, än mycket om lite så fungerar det perfekt för mig.</p>
        <p>Nya arbetsgivaren har en större inriktning mot test än den gamla, så i framtiden tänker jag mig att bli riktigt vass på testautomatisering och testutveckling, kanske till och med inom web?</p>
        <p>Har varit sugen på att gå en eller ett par högskolekurser inom web-programmering/-utveckling länge då det framförallt har varit en hobby med HTML/CSS/PHP/MySQL, och jag dels känner att jag behöver strukturera upp mitt lärande samtidigt som jag behöver få mina kunskaper ”på papper”. Fick i somras upp ögonen för dessa kurspaketen, och sökte in.</p>
        <p>På fritiden tycker jag om att umgås med fru och hund, lira tv-spel och gå på fotbollsmatcher. Mer än så hinner man inte med när man utöver 40-timmars arbetsvecka ska försöka sig på halvtidsstudier. </p>
EOD;

// Finally, leave it all to the rendering phase of Saga.
include(SAGA_THEME_PATH);