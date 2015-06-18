<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php

function akiri_enhavon()
{
    $indikilo = akiri_lokan_indikilon();
    $indikilo_red = __DIR__ . "/redakto/" . str_replace("/", "_", $indikilo);
    if(isset($_POST['redaktita_enhavo'])) {
        $enhavo = htmlentities($_POST['redaktita_enhavo']);
    }
    else if(file_exists($indikilo_red . "0")) {
        $n=0;
        for(; file_exists($indikilo_red . $n); $n++);
        $n--;

        $enhavo = htmlentities(file_get_contents($indikilo_red . $n, "r")); 
    }
    else
        $enhavo = htmlentities(file_get_contents($indikilo, "r")); 

    $enhavo = preg_replace("/ADRESANTO: .* ADRESANTO/s", "", $enhavo);
    return $enhavo;
}

function konservi_redaktitan_enhavon()
{
    if(isset($_POST['redaktita_enhavo'])) {
        $indikilo = akiri_lokan_indikilon();
        $indikilo_red = __DIR__ . "/redakto/" . str_replace("/", "_", $indikilo);
        $enhavo = "<!--ADRESANTO: " . $_POST['adreso'] . ": " . $_POST['komento'] . " ADRESANTO-->\n" . $_POST['redaktita_enhavo'];

        $n=0;
        for(; file_exists($indikilo_red . $n); $n++);

        mail("matthias-vonlaer@web.de", "redakto", $enhavo);
        if(file_put_contents($indikilo_red . $n, $enhavo)) {
            $_GET['redakti'] = null;
            echo "<em>Viaj ŝanĝoj estas konservitaj. Ili estos enmetataj post provlegado.</em>";
        }
        else
            echo '<b>Eraro okazis. Viaj ŝanĝoj ne estas konservitaj. Bonvolu sendi viajn ŝanĝojn al <a href="mailto:matthias-vonlaer@web.de">tiu adreso</a>.</b>';
    }
}

?>
