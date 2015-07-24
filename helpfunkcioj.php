<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php

function akiri_lokan_indikilon()
{
    $indikilo = akiri_uri();
    if(strpos($indikilo, ".php") == false) $indikilo .= "index.php";
    return $indikilo;
}

function akiri_uri()
{
    $uri = $_SERVER['REQUEST_URI'];
    $poz = strpos($uri, "?");
    if($poz)
        $uri = substr($uri, 0, $poz); 
    return $uri;
}

function krei_suprolinion()
{
    $supro_linio = "";
    $ligilo = "";

    $supro_linio = '<a href="/">Hejmo</a>';
    $ligilo = akiri_lokan_indikilon();

    $uri = akiri_uri();

    $aro = explode('/', $uri);
    foreach($aro as $elemento) {
        if($elemento != 'index.php' and $elemento != '') {
            $ligilo .= '/' . $elemento;
            $elemento = preg_replace("/_/", " ", $elemento);
            $elemento = preg_replace("/\.php/", "", $elemento);

            if($elemento == "bazregulverko")
                $supro_linio .= ' > <em>Bazregulverko</em>';
            else
                $supro_linio .= ' > <a href="' . $ligilo . '">' . ucfirst($elemento) . '</a>';
        }
    }
    $supro_linio .= '  (<a href="?redakti">redakti</a>)';
    return $supro_linio;
}

function kalkuli()
{
    if(!isset($_SESSION['ekzistas'])) {
        file_put_contents(__DIR__ . "/kalkulilo.txt", "SEANCO    " . date("H:i d/M/Y") . "\n", FILE_APPEND);
        $_SESSION['ekzistas'] = true;
    }

    file_put_contents(__DIR__ . "/kalkulilo.txt", $_SERVER['REQUEST_URI'] . "    " . date("H:i d/M/Y") . "\n", FILE_APPEND);
}

function tradukinda_sorcxo($angla)
{
    echo '
        <div class="informo">
            Tiu sorĉo ne jam estas tradukita. Ĉi tie vi trovas la <a href="http://paizo.com/pathfinderRPG/prd/spells/'.$angla.'" target="_blank">la anglan priskribon</a>.
        </div>
        ';
}

function tradukinda_paragrafo($angla)
{
    echo '
        <div class="informo">
            Tiu paragrafo ne jam estas tradukita. Ĉi tie vi trovas la <a href="http://paizo.com/pathfinderRPG/prd/'.$angla.'" target="_blank">la anglan priskribon</a>.
        </div>
        ';
}

?>
