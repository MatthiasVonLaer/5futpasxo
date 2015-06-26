<?php /*
    Copyright © 2015  Matthias von Laer
    email: matthias-vonlaer@web.de

    All content of this website is Open Game Content; you can redistribute it
    and/or modify it under the terms of the Open Game Licence which can
    be found in libera-ludo-permisilo.php
 */ ?>

<?php

function kontrolilo()
{
    $uri = $_SERVER['REQUEST_URI'];
    $poz = strpos($uri, "?");
    if($poz)
        $uri = substr($uri, 0, $poz); 

    if($uri[strlen($uri)-1] == "/") 
        $nuna_dosiero = "index.php";
    else {
        $poz = strrpos($uri, "/");
        $nuna_dosiero = substr($uri, $poz+1); 
    }

    if($nuna_dosiero == "sercxrezulto.php")
        return;

    $enhavo = file_get_contents($nuna_dosiero, "r");
    preg_match_all("/<a[^\>]*href=\"([^\>]*)\">/", $enhavo, $trovoj, PREG_SET_ORDER);

    foreach($trovoj as $trovo) {
        $href = $trovo[1];
        $eroj = explode("#", $href);

        $indikilo = "";
        $celo = "";
        if(count($eroj) >= 1)
            $indikilo = $eroj[0];
        if(count($eroj) >= 2)
            $celo = $eroj[1];

        if($indikilo == "")
            $indikilo = $nuna_dosiero;

        if(strpos($indikilo, ".php") === false and strpos($indikilo, ".pdf") === false)
            $indikilo .= "/index.php";

        if(!file_exists($indikilo)) {
            echo 'a[href="' . $href . '"] { color: #990000; } ';
        }
        else if($celo != "" and !cxu_celo($indikilo, $celo)) {
            echo 'a[href="' . $href . '"] { color: #990000; } ';
        }
    }
}

function cxu_celo($indikilo, $celo)
{
    $enhavo = file_get_contents($indikilo, "r");
    $poz = strpos($enhavo, 'id="' . $celo . '"');
    return $poz;
}

?>
