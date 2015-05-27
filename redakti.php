<?php

function akiri_enhavon()
{
    $indikilo = akiri_lokan_indikilon();
    $indikilo_red = __DIR__ . "/redakto/" . str_replace("/", "_", $indikilo);
    if(isset($_POST['redaktita_enhavo'])) {
        return htmlentities($_POST['redaktita_enhavo']);
    }
    else if(file_exists($indikilo_red . "0")) {
        $n=0;
        for(; file_exists($indikilo_red . $n); $n++);
        $n--;

        return htmlentities(file_get_contents($indikilo_red . $n, "r")); 
    }
    else
        return htmlentities(file_get_contents($indikilo, "r")); 
}

function konservi_redaktitan_enhavon()
{
    if(isset($_POST['redaktita_enhavo'])) {
        $indikilo = akiri_lokan_indikilon();
        $indikilo_red = __DIR__ . "/redakto/" . str_replace("/", "_", $indikilo);

        $n=0;
        for(; file_exists($indikilo_red . $n); $n++);

        mail("matthias-vonlaer@web.de", "redakto", $_POST['redaktita_enhavo']);
        if(file_put_contents($indikilo_red . $n, $_POST['redaktita_enhavo'])) {
            if($_POST['adreso'] or $_POST['komento'])
                file_put_contents($indikilo_red . $n . "_komento", $_POST['adreso'] . ": " . $_POST['komento']);
            $_GET['redakti'] = null;
            echo "<em>Viaj ŝanĝoj estas konservitaj. Ili estos enmetataj post provlegado.</em>";
        }
        else
            echo '<b>Eraro okazis. Viaj ŝanĝoj ne estas konservitaj. Bonvolu sendi viajn ŝanĝojn al <a href="mailto:matthias-vonlaer@web.de">tiu adreso</a>.</b>';
    }
}

?>
